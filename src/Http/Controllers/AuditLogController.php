<?php

namespace Milton2913\AuditLog\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Milton2913\AuditLog\Models\AuditLog;
use Gate;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AuditLogController extends Controller
{
    public function index(Request $request)
    {
        $logs = AuditLog::paginate(5);
        return view('AuditLog::index',compact('logs'));
    }

    public function show($id,AuditLog $auditLog)
    {
        $log = AuditLog::find($id);
        return view('AuditLog::show', compact('log'));
    }
}
