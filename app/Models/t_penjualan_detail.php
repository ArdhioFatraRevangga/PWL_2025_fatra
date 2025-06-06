<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\t_penjualan;
use App\Models\m_barang;

class t_penjualan_detail extends Model
{
    use HasFactory;

    protected $table = 't_penjualan_detail';
    protected $primaryKey = 'detail_id';

    protected $fillable = [
        'penjualan_id',
        'barang_id',
        'harga',
        'jumlah',
    ];

    /**
     * Relasi ke penjualan
     */
    public function penjualan(): BelongsTo
    {
        return $this->belongsTo(t_penjualan::class, 'penjualan_id', 'penjualan_id');
    }

    /**
     * Relasi ke barang
     */
    public function barang(): BelongsTo
    {
        return $this->belongsTo(m_barang::class, 'barang_id', 'barang_id');
    }
}