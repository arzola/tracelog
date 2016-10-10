<?php
namespace Icodemx\Tracelog\Classes;

use Backend\Facades\BackendAuth;
use Icodemx\Tracelog\Models\Log;

trait LastEdited
{
    public static function bootLastEdited()
    {
        static::extend(function ($model) {
            $model->morphMany['logs'] = ['Icodemx\Tracelog\Models\Log', 'name' => 'traceable'];
            $model->bindEvent('model.afterSave', function () use ($model) {
                $log = new Log();
                $log->user = BackendAuth::getUser();
                $log->userfallback = BackendAuth::getUser()->login . ': ' . BackendAuth::getUser()->first_name . ' ' . BackendAuth::getUser()->last_name;
                $log->msg = (isset($model->message)) ? $model->message : 'Updated';
                $log->reference = (isset($model->referenceLog)) ? $model->{$model->referenceLog} : '';
                $model->logs()->save($log);
            }, 500);
            $model->bindEvent('model.afterDelete', function () use ($model) {
                $log = new Log();
                $log->user = BackendAuth::getUser();
                $log->userfallback = BackendAuth::getUser()->login . ': ' . BackendAuth::getUser()->first_name . ' ' . BackendAuth::getUser()->last_name;
                $log->msg = (isset($model->message)) ? $model->message : 'Deleted';
                $log->reference = (isset($model->referenceLog)) ? $model->{$model->referenceLog} : '';
                $model->logs()->save($log);
            }, 500);
        });
    }

    public function getLogsAttribute()
    {
        $lastEdition = $this->logs()->orderBy('created_at', 'desc')->first();
        return ($lastEdition && is_object($lastEdition->user)) ? $lastEdition->user->first_name . ' ' . $lastEdition->user->last_name . ' > ' . $lastEdition->created_at : '';
    }
}
