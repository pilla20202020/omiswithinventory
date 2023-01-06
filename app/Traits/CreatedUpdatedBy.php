<?php

namespace App\Traits;

trait CreatedUpdatedBy
{
    public static function bootCreatedUpdatedBy()
    {
        // updating created_by and updated_by when model is created
        static::creating(function ($model) {
            if (!$model->isDirty('createdBy')) {
                $model->createdBy = auth()->user()->id;
            }
            // if (!$model->isDirty('updated_by')) {
            //     $model->updated_by = auth()->user()->id;
            // }
            if (!$model->isDirty('createdOn')) {
                $model->createdOn = now();
            }
        });

        // updating updated_by when model is updated
        static::updating(function ($model) {
            if (!$model->isDirty('updatedBy')) {
                $model->updatedBy = auth()->user()->id;
            }
        });
    }
}