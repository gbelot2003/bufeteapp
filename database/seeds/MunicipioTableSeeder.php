<?php
/**
 * Created by PhpStorm.
 * User: ajax
 * Date: 02-16-15
 * Time: 02:01 AM
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Municipio;

class MunicipioTableSeeder extends Seeder {
	public function run()
	{
		DB::table('municipios')->delete();

		Municipio::create([
			'departamento_id' => 1,
			'municipio' => 'La Ceiba'
		]);

		Municipio::create([
			'departamento_id' => 1,
			'municipio' => 'El Porvenir'
		]);

		Municipio::create([
			'departamento_id' => 1,
			'municipio' => 'Tela'
		]);

		Municipio::create([
			'departamento_id' => 1,
			'municipio' => 'Jutiapa'
		]);

		Municipio::create([
			'departamento_id' => 1,
			'municipio' => 'La Masica'
		]);

		Municipio::create([
			'departamento_id' => 1,
			'municipio' => 'San Francisco'
		]);

		Municipio::create([
			'departamento_id' => 1,
			'municipio' => 'Arizona'
		]);

		Municipio::create([
			'departamento_id' => 1,
			'municipio' => 'Esparta'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Trujillo'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Balfante'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Iriona'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Limón'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Sabá'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Santa Fe'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Santa Rosa de Aguán'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Sonaguera'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Tocoa'
		]);

		Municipio::create([
			'departamento_id' => 2,
			'municipio' => 'Bonito Orienta'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Comayagua'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Ajuterique'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'El Rosario'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Esquías'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Humuya'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'La Libertad'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Lamaní'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'La Trinidad'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Lejamani'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Meambar'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Minas de Oro'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Ojo de Agua'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'San Jerónimo'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'San José de Comayagua'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'San José de Potrero'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'San Luis'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'San Sebastian'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Siguatepeque'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Villa de San Antonio'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Las Lajas'
		]);

		Municipio::create([
			'departamento_id' => 3,
			'municipio' => 'Taulabé'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Santa Rosa de Copán'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Cabañas'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Concepción'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Copán Ruinas'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Corquín'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Cucuyagua'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Dolores'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Dulce Nombre'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'El Paraíso'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Florida'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'La Jigua'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'La Unión'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Nueva Arcadia'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'San Agustin'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'San Antonio'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'San Jerónimo'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'San José'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'San Juan de Opoa'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'San Nicolás'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'San Pedro'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Santa Rita'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Trinidad de Copán'
		]);

		Municipio::create([
			'departamento_id' => 4,
			'municipio' => 'Veracruz'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'San Pedro Sula'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'Choloma'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'Omoa'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'Pimienta'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'Potrerillos'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'Puerto Cortéz'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'San Antonio de Cortéz'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'San Francisco de Yojoa'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'San Manuel'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'Santa Cruz de Yojoa'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'Villanueva'
		]);

		Municipio::create([
			'departamento_id' => 5,
			'municipio' => 'La Lima'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Choluteca'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Apacilagua'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Concepción de Maria'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Duyere'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'El Corpus'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'El Triunfo'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Marcovia'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Morolica'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Namasigue'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Orocuina'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Pespire'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'San Antonio de Flores'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'San Isidro'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'San José'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'San Marcos de Colón'
		]);

		Municipio::create([
			'departamento_id' => 6,
			'municipio' => 'Santa Ana de Yusguare'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Yuscarán'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Alauca'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Danlí'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'El Paraíso'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Guinope'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Jacaleapa'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Liure'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Morocelí'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Oropolí'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Potrerillos'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'San Antonio de Flores'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'San Lucas'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'San Matías'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Soledad'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Teupacenti'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Texiguat'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Vado Ancho'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Yauyupe'
		]);

		Municipio::create([
			'departamento_id' => 7,
			'municipio' => 'Trojes'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Tegucigalpa'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Alubarén'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Cedros'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Curarén'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'El Porvenir'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Guaimaca'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'La Libertad'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'La Venta'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Lepaterique'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Maraita'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Marale'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Nueva Armenia'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Ojojona'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Orica'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Reitoca'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Sabanagrande'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'San Antonio de Oriente'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'San Buenaventura'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'San Ignacio'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'San Juan de Flores'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'San Miguelito'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Santa Ana'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Santa Lucia'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Talanga'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Tatumbla'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Valle de Angeles'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Villa de San Francisco'
		]);

		Municipio::create([
			'departamento_id' => 8,
			'municipio' => 'Vallecillo'
		]);

		Municipio::create([
			'departamento_id' => 9,
			'municipio' => 'Puerto Lempira'
		]);

		Municipio::create([
			'departamento_id' => 9,
			'municipio' => 'Brus Laguna'
		]);

		Municipio::create([
			'departamento_id' => 9,
			'municipio' => 'Ahuas'
		]);

		Municipio::create([
			'departamento_id' => 9,
			'municipio' => 'Juan Francisco Bulnes'
		]);

		Municipio::create([
			'departamento_id' => 9,
			'municipio' => 'Ramón Villeda Morales'
		]);

		Municipio::create([
			'departamento_id' => 9,
			'municipio' => 'Wampusirpe'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'La Esperanza'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Camsca'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Colomoncagua'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Concepción'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Dolores'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Intibucá'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Jesús de Otoro'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Magdalena'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Masaguara'
		]);


		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'San Antonio'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'San Isidro'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'San Juan'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'San Marcos de la Sierra'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'San Miguel Guancapla'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Santa Lucía'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'Yamaranguila'
		]);

		Municipio::create([
			'departamento_id' => 10,
			'municipio' => 'San Francisco de Opalaca'
		]);

		Municipio::create([
			'departamento_id' => 11,
			'municipio' => 'Roatán'
		]);

		Municipio::create([
			'departamento_id' => 11,
			'municipio' => 'Guanaja'
		]);

		Municipio::create([
			'departamento_id' => 11,
			'municipio' => 'José Santos Guardiola'
		]);

		Municipio::create([
			'departamento_id' => 11,
			'municipio' => 'Utila'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'La Paz'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Aguanqueterque'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Cabañas'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Cane'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Chinacla'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Guajiquiro'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Lauterique'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Marcala'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Mercedes de Oriente'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Opatoro'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'San Antonio del Norte'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'San José'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'San Juan'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'San Pedro de Tutule'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Santa Ana'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Santa Elena'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Santa María'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Santiago de Puringla'
		]);

		Municipio::create([
			'departamento_id' => 12,
			'municipio' => 'Yarula'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Gracias'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Belén'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Candelaria'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Cololaca'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Erandique'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Gualcince'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Guarita'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'La Campa'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'La Iguala'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Las Flores'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'La Union'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'La Virtud'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Lepaera'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Mapulaca'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Piraera'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'San Andrés'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'San Francisco'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'San Juan Guarita'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'San Manuel Colohente'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'San Rafael'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'San Sebastián'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Santa Cruz'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Talgua'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Tambla'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Tomalá'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Valladolid'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'Virginia'
		]);

		Municipio::create([
			'departamento_id' => 13,
			'municipio' => 'San Marcos de Coiquín'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Ocotepeque'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Belén Gualcho'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Concepción'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Dolores Merendón'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Fraternidad'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'La Encarnación'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'La Labor'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Lucerna'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Mercedes'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'San Fernando'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'San Francisco del Valle'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'San Jorge'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'San Marcos'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Santa Fé'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Sensenti'
		]);

		Municipio::create([
			'departamento_id' => 14,
			'municipio' => 'Sinuapa'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Juticalpa'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Campamento'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Catacamas'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Concordia'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Dulce Nombre de Culmin'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'El Rosario'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Esquipulas del Norte'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Gualaco'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Guarizama'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Guata'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Jano'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'La Unión'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Manguelile'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Manto'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Salamá'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'San Esteban'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'San Francisco de Becerra'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'San Francisco de la paz'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Santa María del Real'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Silca'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Yocón'
		]);

		Municipio::create([
			'departamento_id' => 15,
			'municipio' => 'Patuca'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Santa Bárbara'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Arada'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Atima'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Azacualpa'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Ceguaca'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Consepción del Norte'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Consepción del Sur'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Chinda'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'El Nispero'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Gualala'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'LLama'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Las Vegas'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Macuelizo'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Naranjito'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Nuevo Celilac'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Nueva Frontera'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Petoa'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Protección'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Quimistán'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'San Fransisco de Ojuera'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'San José de las Colinas'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'San Luis'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'San Marcos'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'San Nicolás'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'San Pedro de Zacapa'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'San Vicente Centenario'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Santa Rita'
		]);

		Municipio::create([
			'departamento_id' => 16,
			'municipio' => 'Trinidad'
		]);

		Municipio::create([
			'departamento_id' => 17,
			'municipio' => 'Nacaome'
		]);

		Municipio::create([
			'departamento_id' => 17,
			'municipio' => 'Alianza'
		]);

		Municipio::create([
			'departamento_id' => 17,
			'municipio' => 'Amapala'
		]);

		Municipio::create([
			'departamento_id' => 17,
			'municipio' => 'Aramecina'
		]);

		Municipio::create([
			'departamento_id' => 17,
			'municipio' => 'Caridad'
		]);

		Municipio::create([
			'departamento_id' => 17,
			'municipio' => 'Goascorán'
		]);

		Municipio::create([
			'departamento_id' => 17,
			'municipio' => 'Langue'
		]);

		Municipio::create([
			'departamento_id' => 17,
			'municipio' => 'San Francisco de Coray'
		]);

		Municipio::create([
			'departamento_id' => 17,
			'municipio' => 'San Lorenzo'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'Yoro'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'Arenal'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'El Negrito'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'EL Progreso'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'Jocón'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'Morazán'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'Olanchito'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'Santa Rita'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'Sulaco'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'Victoria'
		]);

		Municipio::create([
			'departamento_id' => 18,
			'municipio' => 'Yorito'
		]);

	}
}