Route::get('/health', function () {
    return response()->json([
        'status' => 'ok',
        'message' => 'API de Peaceful funcionando en Coolify',
        'server_time' => now()
    ]);
});
