<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /* Tablas débiles */
        Schema::create('tipo_nuip', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 5)->unique();
        });

        Schema::create('nivel_formacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('tipo_contrato', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('especialidad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('estado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('jornada', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('alternativa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('empresa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('programa', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('centro_formacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
        });

        Schema::create('ambiente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->foreignId('centro_formacion_id')
                  ->constrained('centro_formacion')
                  ->cascadeOnDelete();
        });

        /* Tablas principales */

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('foto')->nullable();
            $table->string('nuip', 20)->unique();
            $table->foreignId('tipo_nuip_id')->constrained('tipo_nuip');
            $table->string('telefono', 20);
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('instructor', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')
                  ->constrained('users')
                  ->unique()
                  ->cascadeOnDelete();
            $table->foreignId('nivel_formacion_id')->constrained('nivel_formacion');
            $table->foreignId('especialidad_id')->constrained('especialidad');
            $table->unsignedSmallInteger('anios_de_experiencia');
            $table->foreignId('tipo_contrato_id')->constrained('tipo_contrato');
            $table->date('fecha_vinculacion');
            $table->foreignId('estado_id')->constrained('estado');
            $table->timestamps();
        });

        Schema::create('ficha', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_ficha')->unique();
            $table->foreignId('centro_formacion_id')->constrained('centro_formacion');
            $table->foreignId('programa_id')->constrained('programa');
            $table->foreignId('jornada_id')->constrained('jornada');
            $table->foreignId('nivel_formacion_id')->constrained('nivel_formacion');
            $table->foreignId('estado_id')->constrained('estado');
            $table->foreignId('instructor_id')->constrained('instructor');
            $table->timestamps();
        });

        Schema::create('aprendiz', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')
                  ->constrained('users')
                  ->unique()
                  ->cascadeOnDelete();
            $table->foreignId('ficha_id')->constrained('ficha');
            $table->foreignId('alternativa_id')->constrained('alternativa');
            $table->foreignId('empresa_id')
                  ->nullable()
                  ->constrained('empresa')
                  ->nullOnDelete();
            $table->date('fecha_inicio_etapa_lectiva');
            $table->date('fecha_fin_etapa_lectiva');
            $table->date('fecha_fin_etapa_productiva')->nullable();
            $table->foreignId('estado_id')
                  ->nullable()
                  ->constrained('estado')
                  ->nullOnDelete();
            $table->timestamps();
        });

        Schema::create('bitacora', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id')
                  ->constrained('users')
                  ->cascadeOnDelete();
            $table->foreignId('estado_id')->constrained('estado');
            $table->string('url');
            $table->text('descripcion');
            $table->timestamps();
        });

        Schema::create('visita', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instructor_id')
                  ->constrained('instructor')
                  ->cascadeOnDelete();
            $table->foreignId('aprendiz_id')
                  ->constrained('aprendiz')
                  ->cascadeOnDelete();
            $table->timestamps();
        });

        /* Tablas de Laravel */

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    public function down(): void
    {
        /* Tablas dependientes */
        Schema::dropIfExists('visita');
        Schema::dropIfExists('bitacora');
        Schema::dropIfExists('aprendiz');
        Schema::dropIfExists('ficha');
        Schema::dropIfExists('instructor');
        Schema::dropIfExists('users');

        /* Tablas débiles */
        Schema::dropIfExists('ambiente');
        Schema::dropIfExists('centro_formacion');
        Schema::dropIfExists('programa');
        Schema::dropIfExists('empresa');
        Schema::dropIfExists('alternativa');
        Schema::dropIfExists('jornada');
        Schema::dropIfExists('estado');
        Schema::dropIfExists('tipo_contrato');
        Schema::dropIfExists('especialidad');
        Schema::dropIfExists('nivel_formacion');
        Schema::dropIfExists('tipo_nuip');

        /* Tablas Laravel */
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};