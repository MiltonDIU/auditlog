<?php
Route::group(['namespace'=>'Milton2913\AuditLog\Http\Controllers'],function (){
    Route::resource('admin/audit-logs', 'AuditLogController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);
});

