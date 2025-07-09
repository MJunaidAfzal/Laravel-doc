<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-s-photo';
    protected static ?string $navigationGroup = 'Blogs Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::id()),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('category_id')
                      ->label('Category')
                      ->options(Category::all()->pluck('name', 'id'))
                      ->searchable(),
                Forms\Components\Select::make('status')
                    ->options([
                        'Active' => 'Active',
                        'Inactive' => 'Inactive',
                    ]),
                Forms\Components\TagsInput::make('tags')
                    ->label('Tags'),
                Forms\Components\RichEditor::make('description')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('images')
                    ->multiple()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Author Name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\BadgeColumn::make('status')
                ->colors([
                    'success' => 'Active',
                    'danger' => 'Inactive',
                ])
                ->icons([
                    'heroicon-s-check-circle' => 'Active',
                    'heroicon-s-x-circle' => 'Inactive',
                ]),
                    Tables\Columns\TextColumn::make('created_at')
                    ->formatStateUsing(function ($state) {
                        $dateTime = \Carbon\Carbon::parse($state)->timezone('Asia/Karachi');
                        $date = $dateTime->format('F jS, Y');
                        $time = $dateTime->format('h:i A');
                        return new \Illuminate\Support\HtmlString("<span style='color:#FBBF24'>{$date} | {$time}</span>");
                    })
                    ->sortable()
                    ->label('Created At'),                  
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->button()->label('')->tooltip('View Blog')->color('primary'),
                Tables\Actions\EditAction::make()->button()->label('')->tooltip('Edit Blog')->color('warning'),
                Tables\Actions\DeleteAction::make()->button()->label('')->tooltip('Delete Blog')->color('danger'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
