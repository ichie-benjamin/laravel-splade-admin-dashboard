<?php

namespace App\Forms;

use ProtoneMedia\Splade\AbstractForm;
use ProtoneMedia\Splade\FormBuilder\File;
use ProtoneMedia\Splade\FormBuilder\Input;
use ProtoneMedia\Splade\FormBuilder\Select;
use ProtoneMedia\Splade\FormBuilder\Submit;
use ProtoneMedia\Splade\FormBuilder\Text;
use ProtoneMedia\Splade\FormBuilder\Textarea;
use ProtoneMedia\Splade\SpladeForm;

class CreateCategoryForm extends AbstractForm
{
    public function configure(SpladeForm $form): void
    {
        $form
            ->action(route('admin.categories.store'))
            ->class('grid grid-cols-2 gap-4')
            ->fill([
                'status' => 1
            ]);
    }

    public function fields(): array
    {
        return [
            Input::make('name')->label('Name')
                ->rules('required', 'max:255')
                ->class('col-span-1')
                ->placeholder('Category name'),

            Input::make('color')->label('Color')
                ->class('col-span-1')
                ->color(),

            Select::make('status')
                ->label('Status')
                ->class('col-span-1')
                ->options([
                    1 => 'Active',
                    0 => 'Disabled',
                ]),
            File::make('icon')
                ->class('col-span-2')
                ->filepond()
                ->label('Icon')
//                    ->preview()
                ->maxSize('5Mb')
                ->accept(['image/png', 'image/jpeg']),
            Textarea::make('description')
                ->class('col-span-2')
                ->label('Description')
                ->autosize(),
            Submit::make()
                ->class('flex ')
                ->label('Save'),
        ];
    }
}
