<?php

namespace App\Model;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class Mensagens extends Model
{
    /**
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var string
     */
    public $primaryKey = 'id';

    protected $casts = [
        'id' => 'string',
    ];

    protected $table = 'mensagem';

    protected $fillable = [
        'id',
        'contato_id',
        'descricao',
    ];

    public function contato()
    {
        return $this->belongsTo(Contatos::class, 'contato_id', 'id');
    }
    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = Uuid::uuid4()->toString();
        });
    }
}
