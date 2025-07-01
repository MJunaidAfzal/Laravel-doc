<video id="localVideo" autoplay muted></video>
<video id="remoteVideo" autoplay></video>
<script>
let localStream;
let peerConnection = new RTCPeerConnection();

navigator.mediaDevices.getUserMedia({ video: true, audio: true })
.then(stream => {
    localStream = stream;
    document.getElementById('localVideo').srcObject = stream;
    stream.getTracks().forEach(track => peerConnection.addTrack(track, stream));
});

peerConnection.ontrack = event => {
    document.getElementById('remoteVideo').srcObject = event.streams[0];
};

peerConnection.onicecandidate = e => {
    if (e.candidate) {
        axios.post('/api/send-signal', {
            signalData: { candidate: e.candidate },
            to: targetUserId
        });
    }
};

window.Echo.private(`call.${myUserId}`)
.listen('WebRTCSignal', (e) => {
    if (e.data.sdp) {
        peerConnection.setRemoteDescription(new RTCSessionDescription(e.data.sdp));
        if (e.data.sdp.type === 'offer') {
            peerConnection.createAnswer().then(answer => {
                peerConnection.setLocalDescription(answer);
                axios.post('/api/send-signal', {
                    signalData: { sdp: answer },
                    to: e.toUserId
                });
            });
        }
    } else if (e.data.candidate) {
        peerConnection.addIceCandidate(new RTCIceCandidate(e.data.candidate));
    }
});
</script>
