<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class WaktuSolatController extends Controller
{
    /**
     * Get prayer times from Waktusolat API
     *
     * GET /api/prayer-times?zone=PHG01
     */
    public function getPrayerTimes()
    {
        try {
            $zone = request('zone', 'PHG01'); // Default to Kuantan, Pahang

            // Call Waktusolat API
            $response = Http::get("https://api.waktusolat.app/v2/solat/{$zone}");

            if ($response->successful()) {
                return response()->json($response->json(), 200);
            }

            return response()->json([
                'error' => 'Failed to fetch prayer times',
                'status' => $response->status()
            ], $response->status());

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error fetching prayer times: ' . $e->getMessage()
            ], 500);
        }
    }
}
