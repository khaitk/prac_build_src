<?php

namespace Laravel\Controllers;

use Laravel\Services\TestService;
use Laravel\Requests\TestRequest;
use Laravel\Helpers\ResponseHelper;

class TestController extends Controller{
    protected $testService;

    public function __construct( TestService $testService ) {
        $this->testService = $testService;
    }

    public function index() {
        $data = $this->testService->getAll();

        return ResponseHelper::success( $data, 'Tests retrieved successfully' );
    }

    public function show( $id ) {
        $data = $this->testService->getById( $id );

        return ResponseHelper::success( $data, 'Test retrieved successfully' );
    }

    public function store( TestRequest $request ) {
        $data = $this->testService->create( $request->validated() );

        return ResponseHelper::success( $data, 'Test created successfully', 201 );
    }

    public function update( TestRequest $request, $id ) {
        $data = $this->testService->update( $id, $request->validated() );

        return ResponseHelper::success( $data, 'Test updated successfully' );
    }

    public function destroy( $id ) {
        $this->testService->delete( $id );

        return ResponseHelper::success( null, 'Test deleted successfully' );
    }
}
