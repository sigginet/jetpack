<?php

class Jetpack_JSON_API_Sync_Options_Endpoint extends Jetpack_JSON_API_Endpoint {
	// POST /sites/%s/sync/options
	protected $needed_capabilities = 'manage_options';

	public function result() {
		Jetpack::init();
		do_action( 'jetpack_sync_all_registered_options' );
		return true;
	}

}
