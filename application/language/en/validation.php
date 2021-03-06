<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"       => "The :attribute must be accepted.",
	"active_url"     => "The :attribute is not a valid URL.",
	"after"          => "The :attribute must be a date after :date.",
	"alpha"          => "The :attribute may only contain letters.",
	"alpha_dash"     => "The :attribute may only contain letters, numbers, and dashes.",
	"alpha_num"      => "The :attribute may only contain letters and numbers.",
	"array"          => "The :attribute must have selected elements.",
	"before"         => "The :attribute must be a date before :date.",
	"between"        => array(
		"numeric" => "The :attribute must be between :min - :max.",
		"file"    => "The :attribute must be between :min - :max kilobytes.",
		"string"  => "The :attribute must be between :min - :max characters.",
	),
	"confirmed"      => "The :attribute confirmation does not match.",
	"count"          => "The :attribute must have exactly :count selected elements.",
	"countbetween"   => "The :attribute must have between :min and :max selected elements.",
	"countmax"       => "The :attribute must have less than :max selected elements.",
	"countmin"       => "The :attribute must have at least :min selected elements.",
	"date_format"	 => "The :attribute must have a valid date format.",
	"different"      => "The :attribute and :other must be different.",
	"email"          => "The :attribute format is invalid.",
	"exists"         => "The selected :attribute is invalid.",
	"image"          => "The :attribute must be an image.",
	"in"             => "The selected :attribute is invalid.",
	"integer"        => "The :attribute must be an integer.",
	"ip"             => "The :attribute must be a valid IP address.",
	"match"          => "The :attribute format is invalid.",
	"max"            => array(
		"numeric" => "The :attribute must be less than :max.",
		"file"    => "The :attribute must be less than :max kilobytes.",
		"string"  => "The :attribute must be less than :max characters.",
	),
	"mimes"          => "The :attribute must be a file of type: :values.",
	"min"            => array(
		"numeric" => "The :attribute must be at least :min.",
		"file"    => "The :attribute must be at least :min kilobytes.",
		"string"  => "The :attribute must be at least :min characters.",
	),
	"not_in"         => "The selected :attribute is invalid.",
	"numeric"        => "The :attribute must be a number.",
	"required"       => "The :attribute field is required.",
    "required_with"  => "The :attribute field is required with :field",
	"same"           => "The :attribute and :other must match.",
	"size"           => array(
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobyte.",
		"string"  => "The :attribute must be :size characters.",
	),
	"unique"         => "The :attribute has already been taken.",
	"url"            => "The :attribute format is invalid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(
        'clusname_match' => 'The :attribute is not valid! Please use only letters, numbers, dash or spaces.',
        'term_required' => 'Please read and verify the :attribute'
    ),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/
    
	'attributes' => array(
        /* Seat */
        'title' => '<code><b>Desk Space / Title</b></code>',
        
        /* Cluster */
        'clusname' => '<code><b>Cluster Name</b></code>',
        'clusmail' => '<code><b>Email</b></code>',
        'clusseats'=> '<code><b>Max Seats</b></code>',
        'cluslev'  => '<code><b>Level</b></code>',
        'clusbuild'=> '<code><b>Building</b></code>',
        'cluster_image' => '<code><b>Upload File</b></code>',

        /* Booking */
        'studtyp' => '<code><b>Position</b></code>',
        'studfirst' => '<code><b>First Name</b></code>',
        'studlast' => '<code><b>Last Name</b></code>',
        'gender' => '<code><b>Gender</b></code>',
        'pillar' => '<code><b>Pillar</b></code>',
        'nation' => '<code><b>Nationality</b></code>',
        'studemail' => '<code><b>Student Email</b></code>',
        'studmob' => '<code><b>Mobile</b></code>',
        'studgov' => '<code><b>NRIC/FIN</b></code>',
        'bookfro' => '<code><b>Booking From</b></code>',
        'booktill' => '<code><b>Booking Till</b></code>',
        'cluster' => '<code><b>Graduate Center</b></code>',
        'seat' => '<code><b>Seat</b></code>',
        'terms' => '<code><b>Terms and Conditions</b></code>',
        'areason' => '<code><b>Reason for Request</b></code>',
        
        /* Logging and Registration */
        'password' => '<code><b>Password</b></code>',
        'firstname' => '<code><b>First Name</b></code>',
        'lastname' => '<code><b>Last Name</b></code>',
        'email' => '<code><b>Email</b></code>',
        'type' => '<code><b>User Type</b></code>'
    ),
);
