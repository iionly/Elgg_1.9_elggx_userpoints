<?php

/* TRADUCCION POR Gonzalo Arroyo de GEARinvent.com */

return array(
'admin:administer_utilities:elggx_userpoints' => 'Elggx Userpoints',
'item:object:userpoint' => 'Puntos del perfil',
'elggx_userpoints:settings' => 'Parámetros de Plugin',
'elggx_userpoints:actions' => ' Configuración de Puntos',
'elggx_userpoints:list' => 'Lista',
'elggx_userpoints:user' => 'Usuario',
'elggx_userpoints:action' => 'Acción',
'elggx_userpoints:reset' => 'Resetear',
'elggx_userpoints:restore' => 'Restaurar',
'elggx_userpoints:restore_all' => 'Restaurar todos los Puntos de Usuarios',
'elggx_userpoints:restore_help' => 'Due to server glitches it can happen sometimes that a user\'s userpoints metadata entry in the database gets corrupted (showing "Array" instead of the number of userpoints on the profile page). If the user\'s userpoints metadata entry is corrupted any further attempts in adding userpoints will fail (resulting in an Internal Server Error 500 even). Restoring the metadata entry is possible by re-calculation of the number of userpoints of this user.<br><b> Please enter here the username of the user account you want to restore the number of userpoints of: </b>',
'elggx_userpoints:restore_all_help' => 'If a lot of user\'s userpoints metadata entries are corrupted you can also select to restore the corresponding metata entries of all users of your site (Warning: this could take a while if you have a large userbase): ',
'elggx_userpoints:detail' => 'Detalle',
'elggx_userpoints:awarded_for' => 'otorgado por',
'elggx_userpoints:moderate' => 'Moderar',
'elggx_userpoints:moderate_empty' => 'No hay Puntos esperando moderación.',
'elggx_userpoints:approved_empty' => 'Este Usuario no ganó ningún Punto todavía.',
'elggx_userpoints:add' => 'Agregar Puntos',
'elggx_userpoints:userpoints' => 'Puntos de Usuario',
'elggx_userpoints:admin' => 'Administración de Puntos de Usuario',
'elggx_userpoints:admin_settings' => 'Cambiar Configuración Userpoints',
'elggx_userpoints:pending' => 'Esperando moderación',
'elggx_userpoints:pending_message' => 'Te ha sido otorgado %d %s esperando moderación.',
'elggx_userpoints:awarded_message' => 'Ha sido otorgado %d %s.',
'elggx_userpoints:total' => 'Total',
'elggx_userpoints:approved' => 'Aprobado',
'elggx_userpoints:approved_message' => 'El %s ha sido Aprobado.',
'elggx_userpoints:denied' => 'Denegado',
'elggx_userpoints:denied_message' => 'El %s ha sido Denegado.',
'elggx_userpoints:delete' => 'Borrar',
'elggx_userpoints:deleteconfirm' => 'Estás seguro que queres borrar los Puntos?',
'elggx_userpoints:delete_success' => 'Correctamente borrados.',
'elggx_userpoints:settings:expire_after' => 'Expirar Puntos luego de un determinado intervalo de tiempo? ',
'elggx_userpoints:settings:expire_after:help' => 'Requires the Expiration date plugin and that Elgg cronjobs be configured.',
'elggx_userpoints:upperplural' => 'Puntos',
'elggx_userpoints:lowerplural' => 'puntos',
'elggx_userpoints:lowersingular' => 'punto',
'elggx_userpoints:settings:yes' => 'Si',
'elggx_userpoints:settings:no' => 'No',
'elggx_userpoints:settings:moderated' => 'Moderado',
'elggx_userpoints:settings:approved' => 'Aprobado',
'elggx_userpoints:settings:save:ok' => 'Successfully saved the Elggx Userpoints plugin settings.',
'elggx_userpoints:settings:transaction_status' => 'Estado de transacción? ',
'elggx_userpoints:settings:transaction_status_info' => 'Select whether all points should be approved automatically, or moderated requiring admin approval.',
'elggx_userpoints:settings:subtract' => 'Permitir restar Puntos? ',
'elggx_userpoints:settings:delete' => 'Permitir borrar Puntos? ',
'elggx_userpoints:settings:delete:note' => 'Note: Points awarded for Elgg annotations (like comments) will not be deleted.',
'elggx_userpoints:settings:displaymessage' => 'Mostrar un mensaje cuando se otorguen los Puntos? ',
'elggx_userpoints:settings:never' => 'Nunca',
'elggx_userpoints:settings:1_hour' => '1 Hora',
'elggx_userpoints:settings:1_day' => '1 Día',
'elggx_userpoints:settings:1_week' => '1 Semana',
'elggx_userpoints:settings:2_weeks' => '2 Semanas',
'elggx_userpoints:settings:4_weeks' => '4 Semanas',
'elggx_userpoints:settings:365_days' => '365 Días',
'elggx_userpoints:settings:toppoints:num' => 'Número de Usuarios a mostrar',
'elggx_userpoints:settings:profile_display' => 'Mostrar Puntos en Perfil de Usuario? ',
'elggx_userpoints:toppoints' => 'Usuarios con mayor puntaje',
'elggx_userpoints:add:user' => 'Usuario:',
'elggx_userpoints:add:description' => 'Descripción:',
'elggx_userpoints:add:success' => 'Se agregaron correctamente %d %s al usuario %s',
'elggx_userpoints:reset:confirm' => 'Seguro de resetear los Puntos del Usuario %s a 0?',
'elggx_userpoints:reset:success' => 'Correctamente borrados %s',
'elggx_userpoints:restore:confirm' => 'Seguro de restaurar los Puntos del Usuario %s?',
'elggx_userpoints:restore:success' => 'Correctamente restaurados los Puntos del Usuario %s.',
'elggx_userpoints:error:invalid_username' => '%s no es un nombre de Usuario válido.',
'elggx_userpoints:restore_all:confirm' => 'Seguro de restaurar los Puntos de todos los Usuarios?',
'elggx_userpoints:restore_all:success' => 'Correctamente restaurados los Puntos de todos los Usuarios.',
'elggx_userpoints:reset:all' => 'Resetear todos los Puntos',
'elggx_userpoints:reset:all:confirm' => 'Seguro de borrar todos los Puntos de los Usuarios a 0?',
'elggx_userpoints:widget:toppoints:info' => 'Un widget para mostrar los Puntos otorgados.',

'userpoints_standard:invitesettings' => 'Configuración de Invitaciones',
'userpoints_standard:misc' => 'Miscelaneo',
'userpoints_standard:loginsettings' => 'Configuración de Login',
'userpoints_standard:activities' => 'Actividades Generales',
'userpoints_standard:classifieds' => 'Plugins Clasificados',
'userpoints_standard:add_classified' => 'Agregar Clasificado',
'userpoints_standard:izap_videos' => 'Izap Videos',
'userpoints_standard:add_video' => 'Agregar Video',
'userpoints_standard:tidypics' => 'Tidypics',
'userpoints_standard:fivestar' => 'Elggx Fivestar',
'userpoints_standard:fivestar_vote' => 'Puntos para votar / ranquear:',
'userpoints_standard:recommendations' => 'Recomendaciones',
'userpoints_standard:recommendations:points' => 'Puntos por hacer una recomendación:',
'userpoints_standard:recommendations:approve' => 'Requerir aprobación:',
'userpoints_standard:friend' => 'Puntos por hacer un Amigo:',
'userpoints_standard:blog' => 'Puntos por publicar en Blog:',
'userpoints_standard:file' => 'Puntos por subir un Archivo:',
'userpoints_standard:bookmarks' => 'Puntos por agregar una Fuente de Información:',
'userpoints_standard:invited' => 'Invitar un Amigo',
'userpoints_standard:verify_email' => 'Validar direcciones de e-mail de Amigos?',
'userpoints_standard:group' => 'Puntos por comenzar un Grupo:',
'userpoints_standard:profile' => 'Puntos por editar el Perfil:',
'userpoints_standard:profileicon' => 'Puntos para subir una imagen de Perfil:',
'userpoints_standard:messageboard' => 'Puntos por publicar un mensaje en un Amigo:',
'userpoints_standard:page_top' => 'Puntos por agregar una página de Wiki:',
'userpoints_standard:likes' => 'Puntos por poner "Me gusta" a algún contenido:',
'userpoints_standard:create_album' => 'Puntos por crear un Album de fotos:',
'userpoints_standard:upload_photo' => 'Puntos por subir una Foto:',
'userpoints_standard:comment' => 'Puntos por publicar un comentario:',
'userpoints_standard:polls' => 'Plugin de Encuestas',
'userpoints_standard:poll' => 'Puntos por publicar una Encuesta:',
'userpoints_standard:pollvote' => 'Puntos por votar en una Encuesta:',
'userpoints_standard:login' => 'Puntos por ingresar al sitio web:',
'userpoints_standard:phototag' => 'Puntos por etiquetar una Foto:',
'userpoints_standard:riverpost' => 'Puntos por publicar en Actualizaciones:',
'userpoints_standard:thewire' => 'Puntos por publicar en Actualizaciones:',
'userpoints_standard:discussion' => 'Puntos por agregar un tema de discusión:',
'userpoints_standard:discussion_reply' => 'Puntos por responder en un tema de discusión:',
'userpoints_standard:invite' => 'Puntos por invitar un Amigo:',
'userpoints_standard:expire_invite' => 'Expirar Puntos por invitaciones pendientes / Permitir reenviar invitación luego:',
'userpoints_standard:require_registration' => 'Requerir registro para Amigos invitados?',
'userpoints_standard:login_threshold' => 'Tiempo antes de otorgar Puntos nuevamente?',
'userpoints_standard:login_interval' => 'Número de días máximos entre Inicios de Sesión para otorgar Puntos:',
'userpoints_standard:1hour' => '1 Hora',
'userpoints_standard:4hours' => '4 Horas',
'userpoints_standard:8hours' => '8 Horas',
'userpoints_standard:12hours' => '12 Horas',
'userpoints_standard:1day' => '1 Día',
'userpoints_standard:1week' => '1 Semana',
'userpoints_standard:1month' => '1 Mes',
'userpoints_standard:delete' => 'Borrar Puntos si el contenido por el que fueron otorgados se suprimió?'
);