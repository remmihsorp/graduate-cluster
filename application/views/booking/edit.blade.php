@layout('base.default')

@section('mainbody')

    {{ render('error.validation') }}

    <div class="row">
      <div class="small-12 large-12 columns">
	<h2>Edit Cluster</h2>
	<hr/>
      </div>
    </div>

    {{ Form::open('booking/update', 'PUT') }}
        {{ Form::token() }}
        <div class="booking">
          <div class="row">
	    <div class="small-12 large-12 columns">
	      {{ Form::hidden('booking', e($booking->id)) }}
	    </div>
	  </div>

	  <div class="row">
	    <div class="large-3 columns">
	      {{ Form::label('studfirst', 'First Name:') }}
	      {{ Form::text('studfirst', e($booking->first_name))  }}
	    </div>
	    <div class="large-3 columns">
	      {{ Form::label('studlast', 'Last Name:') }}
	      {{ Form::text('studlast', e($booking->last_name))  }}
	    </div>
	    <div class="large-6 columns"></div>
	  </div>

	  <div class="row">
	    <div class="large-12 columns">
	      <h4 class="subheader">
		1. Update Contact Information 
	      </h4>
	    </div>
	  </div>

	  <div class="row">
	    <div class="small-6 large-4 columns">
	      {{ Form::label('studmob', 'Mobile:') }}
	      {{ Form::text('studmob', e($booking->mobile)) }}
	    </div>
	    <div class="small-6 large-4 columns"></div>
	    <div class="small-6 large-4 columns"></div>
	  </div>

	  <div class="row">
	    <div class="large-12 columns">
	      <h4 class="subheader">
		2. Update Booking Duration
	      </h4>
	    </div>
	  </div>

	  <div class="row">
	    <div class="large-2 columns">
	      {{ Form::label('bookfro', 'Booking From:', array('class'=>'required', 'style'=>'padding-top: 7px')) }}
	    </div>
	    <div class="large-3 columns">
        {{ Form::text('bookfro', date_format(date_create(e($booking->booking_from)),'Y-m-d'), array('placeholder'=>'yy-mm-dd', 'id'=>'from', 'disabled')) }}
	    </div>
	    <div class="large-2 columns">
	      {{ Form::label('booktill', 'Booking Till:', array('style'=>'padding-top: 7px;')) }}
	    </div>
	    <div class="large-3 columns end">
	      {{ Form::text('booktill', date_format(date_create(e($booking->booking_till)),'Y-m-d'), array('placeholder'=>'yy-mm-dd', 'id'=>'to')) }}
	    </div>
	  </div>
	  
	  <div class="row">
	    <div class="large-3 columns">
	      {{ Form::submit('UPDATE', array('class'=>'button expand right')) }}
	    </div>
	  </div>
        </div>

    {{ Form::close() }}


    {{ render('error.validation_js') }}
	
    <script>
      $(function() {
        $( "#from" ).datepicker({
           defaultDate: "+1w",
           changeMonth: true,
           dateFormat: "yy-mm-dd",
           onClose: function( selectedDate ) {
             $( "#to" ).datepicker( "option", "minDate", selectedDate );
           }
        });
        $( "#to" ).datepicker({
           defaultDate: "+1w",
           changeMonth: true,
           dateFormat: "yy-mm-dd",
           onClose: function( selectedDate ) {
             $( "#from" ).datepicker( "option", "maxDate", selectedDate );
           }
        });
      });
    </script>

@endsection

