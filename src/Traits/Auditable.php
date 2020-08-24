<?php


namespace Milton2913\AuditLog\Traits;

use Milton2913\AuditLog\Models\AuditLog;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Object_;

trait Auditable
{
    public static function bootAuditable()
    {
        static::created(function (Model $model) {
            self::audit('created', $model);
        });

        static::updated(function (Model $model) {
            self::audit('updated', $model);
        });

        static::deleted(function (Model $model) {
            self::audit('deleted', $model);
        });
    }

    protected static function audit($description, $model)
    {
        $data = array(
            'description' => $description,
            'subject_id' => $model->id ?? null,
            'subject_type' => get_class($model) ?? null,
            'user_id' => auth()->id() ?? null,
            'properties' => $model ?? null,
            'host' => request()->ip() ?? null,
        );
        if ($description === "updated") {
            $old_properties = $model->original;
            $old_properties = json_encode($old_properties);
            $data['old_properties'] = $old_properties;
        }
        AuditLog::create($data);
    }
}
