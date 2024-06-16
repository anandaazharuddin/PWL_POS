<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\KategoriRequest;
use App\Models\KategoriModel;
use App\Models\m_kategoriModel;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return kategoriModel::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoriRequest $request): JsonResponse
    {
        $kategori = kategoriModel::create($request->safe()->all());
        if (empty($kategori)) {
            return response()->json([
                'success' => false,
                'errors' => 'conflict with request data and current database',
            ], 409);
        }

        return response()->json([
            'success' => true,
            'kategori' => $kategori,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriModel $kategori): JsonResponse
    {
        return response()->json([
            'success' => true,
            'kategori' => $kategori
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriRequest $request, kategoriModel $kategori): JsonResponse
    {
        $isUpdated = $kategori->update($request->safe()->all());

        if (!$isUpdated) {
            return response()->json([
                'success' => false,
                'errors' => 'conflict with request data and current database',
            ], 409);
        }

        return response()->json([
            'success' => true,
            'kategori' => $kategori
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategoriModel $kategori): JsonResponse
    {
        try {
            $kategori->delete();
            return response()->json([
                'success' => true,
                'message' => 'Kategori Data success deleted'
            ]);
        } catch (QueryException $qe) {
            return response()->json([
                'success' => false,
                'errors' => $qe->getMessage(),
            ], 422);
        }
    }
}