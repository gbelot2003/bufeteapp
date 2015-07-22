<?php
/**
 * Created by PhpStorm.
 * User: ajax
 * Date: 02-16-15
 * Time: 02:01 AM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Departamento;

class DepartamentoTableSeeder extends Seeder{
	public function run()
	{
		DB::table('departamentos')->delete();

		Departamento::create([
			'departamento' => 'Atlántida'
		]);

		Departamento::create([
			'departamento' => 'Colón'
		]);

		Departamento::create([
			'departamento' => 'Comayagua'
		]);

		Departamento::create([
			'departamento' => 'Copán'
		]);

		Departamento::create([
			'departamento' => 'Cortés'
		]);

		Departamento::create([
			'departamento' => 'Choluteca'
		]);

		Departamento::create([
			'departamento' => 'El Paraíso'
		]);

		Departamento::create([
			'departamento' => 'Francisco Morazán'
		]);

		Departamento::create([
			'departamento' => 'Gracias a Dios'
		]);

		Departamento::create([
			'departamento' => 'Intibucá'
		]);

		Departamento::create([
			'departamento' => 'Islas de la Bahía'
		]);

		Departamento::create([
			'departamento' => 'La Paz'
		]);

		Departamento::create([
			'departamento' => 'Lempira'
		]);

		Departamento::create([
			'departamento' => 'Ocotepeque'
		]);

		Departamento::create([
			'departamento' => 'Olancho'
		]);

		Departamento::create([
			'departamento' => 'Santa Bárbara'
		]);

		Departamento::create([
			'departamento' => 'Valle'
		]);

		Departamento::create([
			'departamento' => 'Yoro'
		]);

	}
}