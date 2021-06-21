<?php

use Apretaste\Alert;
use Apretaste\Request;
use Apretaste\Response;

class Service
{
	/**
	 * A possible home screen
	 *
	 * @param Request $request
	 * @param Response $response
	 * @throws Alert
	 */
	public function _main(Request $request, Response $response)
	{
		$content = array (
			'tabs' =>
				array (
					0 =>
						array (
							'caption' => 'Muro',
							'active' => false,
							'command' => 'command muro',
						),
					1 =>
						array (
							'caption' => 'Popular',
							'active' => false,
							'command' => 'command popular',
						),
					2 =>
						array (
							'caption' => 'Tendencia',
							'active' => false,
							'command' => 'command tendencia',
						),
					3 =>
						array (
							'caption' => 'Influencers',
							'active' => true,
							'command' => 'command influencers',
						),
					4 =>
						array (
							'caption' => 'Ayuda',
							'active' => false,
							'command' => 'command ayuda',
						),
				),
			'title' =>
				array (
					'text' => 'Componentes',
				),
			'text' =>
				array (
					'text' => 'Secondarely, @salvipascual this is a #NiceText to show, that points to https://www.apretaste.org or opens the email salvi@apretaste.org, and cannot be larger of certain #NumberOfChars, because it won\'t let the text go to a #third line',
				),
			'avatar' =>
				array (
					'face' => 'coqueta',
					'color' => 'morado',
					'size' => 30,
					'online' => true,
					'influencer' => true,
				),
			'stars' =>
				array (
					'value' => 33,
					'size' => 'small',
				),
			'chips' =>
				array (
					0 =>
						array (
							'icon' => 'fas fa-ankh',
							'text' => 'Amuleto',
							'size' => 'large',
						),
					1 =>
						array (
							'icon' => 'fas fa-calendar',
							'text' => '6/25/2021 10:30 PM',
						),
					2 =>
						array (
							'icon' => 'fas fa-globe',
							'text' => 'Activo',
							'active' => 'true',
						),
					3 =>
						array (
							'icon' => 'fas fa-user',
							'text' => '@salvipascual',
							'size' => 'small',
						),
					4 =>
						array (
							'icon' => 'fas fa-trash',
							'text' => 'Borrar Todo',
							'size' => 'small',
							'clear' => true,
						),
					5 =>
						array (
							'text' => 'Hola',
							'clear' => true,
						),
				),
			'list' =>
				array (
					0 =>
						array (
							'icon' => 'fas fa-brain',
							'title' => 'A sassy title',
							'text' => 'Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-user',
											'caption' => 'Visitar perfil',
											'command' => 'command object perfil',
										),
									1 =>
										array (
											'icon' => 'fas fa-trash',
											'caption' => 'Eliminar',
											'command' => 'command object borrar',
										),
								),
						),
					1 =>
						array (
							'icon' => 'fas fa-ban',
							'title' => 'There is no action here',
							'text' => 'Much ado about nothing',
							'command' => 'click ban list element',
						),
					2 =>
						array (
							'icon' => 'fas fa-menorah',
							'title' => 'Just the title, how cool!',
							'command' => 'click menorah list element',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-trash',
											'caption' => 'Eliminar',
											'command' => 'command object borrar',
										),
								),
						),
					3 =>
						array (
							'icon' => 'fas fa-ankh',
							'text' => 'Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-play',
											'caption' => 'Iniciar audio',
											'command' => 'command object play',
										),
									1 =>
										array (
											'icon' => 'fas fa-trash',
											'caption' => 'Eliminar',
											'command' => 'command object borrar',
										),
								),
						),
				),
			'people' =>
				array (
					0 =>
						array (
							'username' => 'salvipascual',
							'gender' => 'M',
							'text' => 'Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line',
							'avatar' =>
								array (
									'face' => 'nerd',
									'color' => 'naranja',
									'online' => true,
									'influencer' => true,
								),
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-user',
											'caption' => 'Visitar perfil',
											'command' => 'command object perfil',
										),
								),
						),
					1 =>
						array (
							'username' => 'refageist',
							'gender' => 'M',
							'avatar' =>
								array (
									'face' => 'hombre',
									'color' => 'amarillo',
									'online' => true,
									'influencer' => true,
								),
							'chips' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-bolt',
											'text' => '45,678',
											'clear' => true,
										),
									1 =>
										array (
											'icon' => 'fas fa-users',
											'text' => '123',
											'clear' => true,
										),
								),
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-user',
											'caption' => 'Visitar perfil',
											'command' => 'command object perfil',
										),
								),
						),
					2 =>
						array (
							'username' => 'juanita',
							'gender' => 'F',
							'text' => 'Trabajadora social',
							'avatar' =>
								array (
									'face' => 'chica',
									'color' => 'rojo',
									'online' => false,
									'influencer' => false,
								),
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-user',
											'caption' => 'Visitar perfil',
											'command' => 'command object perfil',
										),
									1 =>
										array (
											'icon' => 'fas fa-trash',
											'caption' => 'Eliminar',
											'command' => 'command object borrar',
										),
								),
						),
				),
			'card' =>
				array (
					'isAd' => true,
					'image' => 'https://apretaste.blob.core.windows.net/pizarra/0001b26d50758625f7d74928f2ca5b9c.jpg',
					'text' => 'Secondarely, @salvipascual this is a #NiceText to show, that points to https://www.apretaste.org or opens the email salvi@apretaste.org, and cannot be larger of certain #NumberOfChars, because it won\'t let the text go to a #third line',
					'inserted' => '2020-06-30 15:25:50',
					'username' => 'salvipascual',
					'gender' => 'M',
					'avatar' =>
						array (
							'face' => 'nerd',
							'color' => 'naranja',
							'online' => true,
							'influencer' => true,
						),
					'shared' =>
						array (
							'icon' => 'fas fa-newspaper',
							'text' => 'Secondarely, a nice text to show, that cannot be larger of certain number of chars, because it wont let the text go to a third line',
							'command' => 'command object play',
						),
					'reactions' =>
						array (
							'like' => 10,
							'love' => 2,
							'lol' => 4,
							'angry' => 1,
							'amaze' => 5,
							'sad' => 0,
							'sucks' => 1,
						),
				),
			'chat' =>
				array (
					0 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'pepe',
							'gender' => 'M',
							'avatar' =>
								array (
									'face' => 'hombre',
									'color' => 'rojo',
									'online' => false,
									'influencer' => false,
								),
							'position' => 'left',
							'text' => 'Hola mundo cruel como anda todo el mio',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-thumbs-up',
											'text' => 10,
											'command' => 'command object perfil',
										),
									1 =>
										array (
											'icon' => 'fas fa-thumbs-down',
											'text' => 2,
											'command' => 'command object perfil',
										),
									2 =>
										array (
											'icon' => 'fas fa-share-alt',
											'command' => 'command object perfil',
										),
								),
						),
					1 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'maria',
							'gender' => 'F',
							'avatar' =>
								array (
									'face' => 'hippie',
									'color' => 'amarillo',
									'online' => true,
									'influencer' => true,
								),
							'position' => 'left',
							'text' => 'Hola mundo cruel como anda todo el mio',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-thumbs-up',
											'text' => 10,
											'command' => 'command object perfil',
										),
									1 =>
										array (
											'icon' => 'fas fa-thumbs-down',
											'text' => 2,
											'command' => 'command object perfil',
										),
									2 =>
										array (
											'icon' => 'fas fa-share-alt',
											'command' => 'command object perfil',
										),
								),
						),
					2 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'pepe',
							'gender' => 'M',
							'avatar' =>
								array (
									'face' => 'hombre',
									'color' => 'rojo',
									'online' => false,
									'influencer' => false,
								),
							'position' => 'left',
							'text' => 'Hola mundo cruel como anda mundo cruel como anda todo el todo el mio',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-thumbs-up',
											'text' => 10,
											'command' => 'command object perfil',
										),
									1 =>
										array (
											'icon' => 'fas fa-thumbs-down',
											'text' => 2,
											'command' => 'command object perfil',
										),
									2 =>
										array (
											'icon' => 'fas fa-share-alt',
											'command' => 'command object perfil',
										),
								),
						),
					3 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'maria',
							'gender' => 'F',
							'avatar' =>
								array (
									'face' => 'hippie',
									'color' => 'amarillo',
									'online' => true,
									'influencer' => true,
								),
							'position' => 'left',
							'text' => 'Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-thumbs-up',
											'text' => 10,
											'command' => 'command object perfil',
										),
									1 =>
										array (
											'icon' => 'fas fa-thumbs-down',
											'text' => 2,
											'command' => 'command object perfil',
										),
									2 =>
										array (
											'icon' => 'fas fa-share-alt',
											'command' => 'command object perfil',
										),
								),
						),
					4 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'salvipascual',
							'gender' => 'M',
							'avatar' =>
								array (
									'face' => 'sensei',
									'color' => 'verde',
									'online' => true,
									'influencer' => false,
								),
							'position' => 'right',
							'text' => 'Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio',
						),
					5 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'salvipascual',
							'gender' => 'M',
							'avatar' =>
								array (
									'face' => 'sensei',
									'color' => 'verde',
									'online' => true,
									'influencer' => false,
								),
							'position' => 'right',
							'text' => 'Hola mundo cruel como anda todo el mio Hola mundo cruel como anda todo el mio',
						),
					6 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'pepe',
							'gender' => 'M',
							'avatar' =>
								array (
									'face' => 'hombre',
									'color' => 'rojo',
									'online' => false,
									'influencer' => false,
								),
							'position' => 'left',
							'text' => 'Hola mundo cruel como anda todo el mio',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-trash',
											'command' => 'command object trash',
										),
								),
						),
					7 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'pepe',
							'gender' => 'M',
							'avatar' =>
								array (
									'face' => 'hombre',
									'color' => 'rojo',
									'online' => false,
									'influencer' => false,
								),
							'position' => 'left',
							'text' => 'Hola mundo mundo cruel como anda todo el cruel como anda todo el mio',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-thumbs-up',
											'text' => 10,
											'command' => 'command object perfil',
										),
									1 =>
										array (
											'icon' => 'fas fa-thumbs-down',
											'text' => 2,
											'command' => 'command object perfil',
										),
									2 =>
										array (
											'icon' => 'fas fa-share-alt',
											'command' => 'command object perfil',
										),
								),
						),
					8 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'pepe',
							'gender' => 'M',
							'avatar' =>
								array (
									'face' => 'hombre',
									'color' => 'rojo',
									'online' => false,
									'influencer' => false,
								),
							'position' => 'left',
							'text' => 'Hola mundo cruel como mundo cruel como anda todo el anda todo el mio',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-thumbs-up',
											'text' => 10,
											'command' => 'command object perfil',
										),
									1 =>
										array (
											'icon' => 'fas fa-thumbs-down',
											'text' => 2,
											'command' => 'command object perfil',
										),
									2 =>
										array (
											'icon' => 'fas fa-share-alt',
											'command' => 'command object perfil',
										),
								),
						),
					9 =>
						array (
							'date' => '2020-06-30 15:25:50',
							'username' => 'maria',
							'gender' => 'F',
							'avatar' =>
								array (
									'face' => 'hippie',
									'color' => 'amarillo',
									'online' => true,
									'influencer' => true,
								),
							'position' => 'left',
							'text' => 'Hola mundo cruel como anda todo el mio',
							'actions' =>
								array (
									0 =>
										array (
											'icon' => 'fas fa-thumbs-up',
											'text' => 10,
											'command' => 'command object perfil',
										),
									1 =>
										array (
											'icon' => 'fas fa-thumbs-down',
											'text' => 2,
											'command' => 'command object perfil',
										),
									2 =>
										array (
											'icon' => 'fas fa-share-alt',
											'command' => 'command object perfil',
										),
								),
						),
				),
			'inputs' =>
				array (
					0 =>
						array (
							'icon' => 'fas fa-user',
							'label' => 'Inserte su @username',
						),
					1 =>
						array (
							'label' => 'Inserte su correo',
							'type' => 'email',
						),
				),
			'switchStatus' =>
				array (
					'label' => 'Mostrar género',
					'active' => true,
				),
			'combo' =>
				array (
					'icon' => 'fas fa-male',
					'label' => 'Género',
					'selected' => 'M',
					'options' =>
						array (
							'M' => 'Masculino',
							'F' => 'Femenino',
						),
				),
			'fab' =>
				array (
					0 =>
						array (
							'icon' => 'fas fa-check',
							'command' => 'command aceptar',
						),
					1 =>
						array (
							'icon' => 'fas fa-arrow-left',
							'command' => 'command ir atras',
						),
					2 =>
						array (
							'icon' => 'fas fa-hashtag',
							'command' => 'command ver notas',
						),
					3 =>
						array (
							'icon' => 'fas fa-users',
							'command' => 'command ver perfil',
						),
					4 =>
						array (
							'icon' => 'fas fa-trash',
							'command' => 'command object borrar',
						),
				),
			'paginator' =>
				array (
					'page' => 5,
					'total' => 11,
					'commandNext' => 'command object next',
					'commandBack' => 'command object back',
				),
		);

		$response->setMainComponent("Main.vue", $content);
	}
}
