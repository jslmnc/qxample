"use strict";

var add = function () {
    const element = document.getElementById('kt_modal_add_user');
    const form = element.querySelector('#kt_modal_add_user_form');
    const modal = new bootstrap.Modal(element);

    var initAddUser = () => {


        var validator = FormValidation.formValidation(
			
            form,
            {
                fields: {
                    'username': {
						verbose:false,
                        validators: {
                            notEmpty: {
                                message: 'Username is required!'
                            },
							stringLength: {
								min: 3,
								max: 20,
								message: 'The username must be more than 3 and less than 20 characters long'
							},
							regexp: {
								regexp: /^[a-zA-Z0-9_\.]+$/,
								message: 'The username can only consist of alphabetical, number, dot and underscore'
								},
							remote: {
								message: 'The username is already taken!',
								url: 'check.php',
								data: {
									username: 'username'
								},
								type: 'GET'
							},
                        }
                    },
				'avatar': {
                validators: {
                    notEmpty: {
                        message: 'Please select an image'
                    },
                    file: {
                        extension: 'jpeg,jpg,png',
                        type: 'image/jpeg,image/png',
                        message: 'The selected file is not valid'
                    },
					file: {
                      
                        maxSize: 2000000,
                        message: 'Image is too large'
                    }
                }
            },
        

                    'email': {
                        validators: {
                            notEmpty: {
                                message: 'Email address is required!'
                            },
							regexp: {
								regexp: /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/,
								message: 'The value is not a valid email address!'
							},
							remote: {
								message: 'The email is already taken!',
								url: 'check.php',
								data: {
									email: 'email'
								},
								type: 'GET'
							},
                        }
                    },
					'fname': {
                        validators: {
                            notEmpty: {
                                message: 'First Name is required!'
                            },
							regexp: {
								regexp: /^(?=.{2,20}$)[a-z]+(?:['_.\s][a-z]+)*$/i,
								message: 'First Name must be atleast 2-20 letters only!'
							},
						
                        }
                    },
					'lname': {
                        validators: {
                            notEmpty: {
                                message: 'Last Name is required!'
                            },
							regexp: {
								regexp: /^(?=.{2,20}$)[a-z]+(?:['_.\s][a-z]+)*$/i,
								message: 'Last name must be atleast 3-20 letters only!'
							},
						
                        }
                    },
					'password': {
                        validators: {
                            notEmpty: {
                                message: 'Password is required!'
                            },
							regexp: {
								regexp: /^(?=(.*[a-z]){1,})(?=(.*[A-Z]){1,})(?=(.*[0-9]){2,})(?=(.*[!@#$%^&*()\-__+.]){1,}).{8,}$/,
								message: 'Use 8 or more characters with a mix of letters, numbers & symbols!'
							},
						
						
                        }
                    },
				    'cpassword': {
                        validators: {
                            notEmpty: {
                                message: 'The password confirmation is required'
                            },
                            identical: {
                                compare: function () {
                                    return form.querySelector('[name="password"]').value;
                                },
                                message: 'Password does not match!'
                            }
                        }
                    },
				
                },

                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );

        const submitButton = element.querySelector('[data-kt-users-modal-action="submit"]');
        submitButton.addEventListener('click', e => {
            e.preventDefault();

            if (validator) {
                validator.validate().then(function (status) {
                    console.log('validated!');

                    if (status == 'Valid') {
                        submitButton.setAttribute('data-kt-indicator', 'on');

                        submitButton.disabled = true;

                        setTimeout(function () {
                            submitButton.removeAttribute('data-kt-indicator');

                            submitButton.disabled = false;

                            Swal.fire({
                                text: "Form has been successfully submitted!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {
						

							var form=$('#kt_modal_add_user_form')[0];
							var formdata=new FormData(form);

							$.ajax({
								type: 'POST',
								url: '_crud.php',
								data: formdata,
								enctype: 'multipart/form-data',
								contentType:false,
								processData:false,
								success: function () {
								}
							  }).then(function(){
								modal.hide();
							window.location.href = 'users';

						});
					
                                   
                                }
                            });

                        }, 2000);
                    } else {
                        Swal.fire({
                            text: "Sorry, looks like there are some errors detected, please try again.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    }
                });
            }
        });

        const cancelButton = element.querySelector('[data-kt-users-modal-action="cancel"]');
        cancelButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
				form.reset();
				window.location.href = 'users';
                if (result.value) {
                    form.reset();
					modal.hide();	
					window.location.href = 'users';
				
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });

        const closeButton = element.querySelector('[data-kt-users-modal-action="close"]');
        closeButton.addEventListener('click', e => {
            e.preventDefault();

            Swal.fire({
                text: "Are you sure you would like to cancel?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, cancel it!",
                cancelButtonText: "No, return",
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: "btn btn-active-light"
                }
            }).then(function (result) {
                if (result.value) {
                    form.reset(); 	
					modal.hide();
					window.location.href = window.location.href;	
                   	
                } else if (result.dismiss === 'cancel') {
                    Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary",
                        }
                    });
                }
            });
        });
    }
    return {
        init: function () {
            initAddUser();
        }
    };
}();

KTUtil.onDOMContentLoaded(function () {
    add.init();
});