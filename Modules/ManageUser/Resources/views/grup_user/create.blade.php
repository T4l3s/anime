@extends('core::layouts.master')

@section('content')
    <v-row
	    class="px-md-4 px-sm-2">
    	<v-col cols="12">
    		<v-card>
    			<v-card-text>
    				<grup-user-form
	    				inline-template
	    				action-form="{{ route('grup-user.store') }}"
	    				redirect-uri="{{ route('grup-user.index') }}"
                        :access-uri='@json($hak_akses)'>
		    			@include('manageuser::grup_user.form')
		    		</grup-user-form>
			    </v-card-text>
    		</v-card>
    	</v-col>
    </v-row>
@endsection
