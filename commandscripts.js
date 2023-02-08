
//----------------- checkbox del --------------------------

$(document).ready(function(){
	$('#all_delete').click(function(){

	Swal.fire({
                    text: "Are you sure you want to delete selected user?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {

						var id=[];

						$('#ucheckbox:checked').each(function(i){
						
							id.push($(this).data('u-id'));


						});
					

						$.ajax({
							url:'_crud.php',
							type:'POST',
							data:{
								id:id,
								action:'deleteall'

							},
							success:function(response){

								if(response==1){

						Swal.fire({
                            text: "Successfully deleted!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function(){
							window.location.href = 'users';

						});

					

		
								}
								else{


								}


							}
						});
                        
                     
                    } else if (result.dismiss === 'cancel') {
                      
                        Swal.fire({
                            text: "User was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });

	});


});


///-------------------------- delete single

function deleteuser(id){
    $(document).ready(function(){

        Swal.fire({
            text: "Are you sure you want to delete user?",
            icon: "warning",
            showCancelButton: true,
            buttonsStyling: false,
            confirmButtonText: "Yes, delete!",
            cancelButtonText: "No, cancel",
            customClass: {
                confirmButton: "btn fw-bold btn-danger",
                cancelButton: "btn fw-bold btn-active-light-primary"
            }
        }).then(function (result) {
            if (result.value) {

                $.ajax({
                    url:'_crud.php',
                    type:'POST',
                    data:{
                        id:id,
                        action:'deleteuser'

                    },
                    success:function(response){
                        
                        Swal.fire({
                    text: "Successfully deleted!",
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary",
                    }

                }).then(function(){
                    if(response==1){
                        window.location.href = 'users';



                        }
                        else{


                        }
                        window.location.href = 'users';

                });



                    }
                });
                
             
            } else if (result.dismiss === 'cancel') {
              
                Swal.fire({
                    text: "User was not deleted.",
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    customClass: {
                        confirmButton: "btn fw-bold btn-primary",
                    }
                });
            }
        });


    });



}





//------------------------ add user -----------------------
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




//----------------- table ----


"use strict";

var KTUsersList = function () {
    var table = document.getElementById('kt_table_users');
    var datatable;
    var toolbarBase;
    var toolbarSelected;
    var selectedCount;


	var exportButtons = () => {
		let s= new Date().toLocaleString();
        const documentTitle = 'Users Report as of '+s;
		
        var buttons = new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'copyHtml5',
                    title: documentTitle
                },
                {
                    extend: 'excelHtml5',
                    title: documentTitle
                },
                {
                    extend: 'csvHtml5',
                    title: documentTitle
                },
                {
                    extend: 'pdfHtml5',
                    title: documentTitle
                }
            ]
        }).container().appendTo($('#kt_ecommerce_report_views_export'));

        const exportButtons = document.querySelectorAll('#kt_ecommerce_report_views_export_menu [data-kt-ecommerce-export]');
        exportButtons.forEach(exportButton => {
            exportButton.addEventListener('click', e => {
                e.preventDefault();

                const exportValue = e.target.getAttribute('data-kt-ecommerce-export');
                const target = document.querySelector('.dt-buttons .buttons-' + exportValue);

                // Trigger click event on hidden datatable export buttons
                target.click();
            });
        });
    }
    var initUserTable = function () {
        const tableRows = table.querySelectorAll('tbody tr');

        tableRows.forEach(row => {
            const dateRow = row.querySelectorAll('td');
            const lastLogin = dateRow[3].innerText.toLowerCase(); 
            let timeCount = 0;
            let timeFormat = 'minutes';

            if (lastLogin.includes('yesterday')) {
                timeCount = 1;
                timeFormat = 'days';
            } else if (lastLogin.includes('mins')) {
                timeCount = parseInt(lastLogin.replace(/\D/g, ''));
                timeFormat = 'minutes';
            } else if (lastLogin.includes('hours')) {
                timeCount = parseInt(lastLogin.replace(/\D/g, ''));
                timeFormat = 'hours';
            } else if (lastLogin.includes('days')) {
                timeCount = parseInt(lastLogin.replace(/\D/g, ''));
                timeFormat = 'days';
            } else if (lastLogin.includes('weeks')) {
                timeCount = parseInt(lastLogin.replace(/\D/g, ''));
                timeFormat = 'weeks';
            }

            const realDate = moment().subtract(timeCount, timeFormat).format();

            dateRow[3].setAttribute('data-order', realDate);

            const joinedDate = moment(dateRow[5].innerHTML, "DD MMM YYYY, LT").format(); // select date from 5th column in table
            dateRow[5].setAttribute('data-order', joinedDate);
        });

        datatable = $(table).DataTable({
            "info": false,
            'order': [],
            "pageLength": 10,
            "lengthChange": false,
            'columnDefs': [
                { orderable: false, targets: 0 }, 
                { orderable: false, targets: 6 },                 
            ]
        });

        datatable.on('draw', function () {
            initToggleToolbar();
            handleDeleteRows();
            toggleToolbars();
        });
    }

    var handleSearchDatatable = () => {
        const filterSearch = document.querySelector('[data-kt-user-table-filter="search"]');
        filterSearch.addEventListener('keyup', function (e) {
            datatable.search(e.target.value).draw();
        });
    }

    var handleFilterDatatable = () => {
        const filterForm = document.querySelector('[data-kt-user-table-filter="form"]');
        const filterButton = filterForm.querySelector('[data-kt-user-table-filter="filter"]');
        const selectOptions = filterForm.querySelectorAll('select');

        filterButton.addEventListener('click', function () {
            var filterString = '';

            selectOptions.forEach((item, index) => {
                if (item.value && item.value !== '') {
                    if (index !== 0) {
                        filterString += ' ';
                    }

                    filterString += item.value;
                }
            });

            datatable.search(filterString).draw();
        });
    }

    var handleResetForm = () => {
        const resetButton = document.querySelector('[data-kt-user-table-filter="reset"]');

        resetButton.addEventListener('click', function () {
            const filterForm = document.querySelector('[data-kt-user-table-filter="form"]');
            const selectOptions = filterForm.querySelectorAll('select');

            selectOptions.forEach(select => {
                $(select).val('').trigger('change');
            });

            datatable.search('').draw();
        });
    }


    var handleDeleteRows = () => {
        const deleteButtons = table.querySelectorAll('[data-kt-users-table-filter="delete_row"]');

        deleteButtons.forEach(d => {
            d.addEventListener('click', function (e) {
                e.preventDefault();

                const parent = e.target.closest('tr');

                const userName = parent.querySelectorAll('td')[3].querySelectorAll('a')[3].innerText;
                Swal.fire({
                    text: "Are you sure you want to delete " + userName + "?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        
                        Swal.fire({
                            text: "You have deleted " + userName + "!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            datatable.row($(parent)).remove().draw();
                        }).then(function () {
                            toggleToolbars();
                        });
                    } else if (result.dismiss === 'cancel') {
                      
                        Swal.fire({
                            text: customerName + " was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            })
        });
    }

    var initToggleToolbar = () => {
        const checkboxes = table.querySelectorAll('[type="checkbox"]');

        toolbarBase = document.querySelector('[data-kt-user-table-toolbar="base"]');
        toolbarSelected = document.querySelector('[data-kt-user-table-toolbar="selected"]');
        selectedCount = document.querySelector('[data-kt-user-table-select="selected_count"]');
        const deleteSelected = document.querySelector('[data-kt-user-table-select="delete_selected"]');

        checkboxes.forEach(c => {
            c.addEventListener('click', function () {
                setTimeout(function () {
                    toggleToolbars();
                }, 50);
            });
        });

        deleteSelected.addEventListener('click', function () {
            Swal.fire({
                text: "Are you sure you want to delete ?",
                icon: "warning",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: "Yes, delete!",
                cancelButtonText: "No, cancel",
                customClass: {
                    confirmButton: "btn fw-bold btn-danger",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            }).then(function (result) {
                if (result.value) {
                  
                    Swal.fire({
                        text: "You have deleted all selected customers!.",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
                    }).then(function () {
                     
                        checkboxes.forEach(c => {
                            if (c.checked) {
                                datatable.row($(c.closest('tbody tr'))).remove().draw();
                            }
                        });

                        const headerCheckbox = table.querySelectorAll('[type="checkbox"]')[0];
                        headerCheckbox.checked = false;
                    }).then(function () {
                        toggleToolbars(); 
                        initToggleToolbar(); 
                    });
					
					                           

                } else if (result.dismiss === 'cancel') {
				

                    Swal.fire({
                        text: "Selected customers was not deleted.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn fw-bold btn-primary",
                        }
						
                   });
				
				

					
                }
					
				
            });
        });
    }

    const toggleToolbars = () => {
        const allCheckboxes = table.querySelectorAll('tbody [type="checkbox"]');

        let checkedState = false;
        let count = 0;

        allCheckboxes.forEach(c => {
            if (c.checked) {
                checkedState = true;
                count++;
            }
        });

        if (checkedState) {
            selectedCount.innerHTML = count;
            toolbarBase.classList.add('d-none');
            toolbarSelected.classList.remove('d-none');
        } else {
            toolbarBase.classList.remove('d-none');
            toolbarSelected.classList.add('d-none');
        }
    }

    return {
        init: function () {
            if (!table) {
                return;
            }

            initUserTable();
            initToggleToolbar();
            handleSearchDatatable();
            handleResetForm();
            handleDeleteRows();
            handleFilterDatatable();
			exportButtons();

        }
    }
}();

KTUtil.onDOMContentLoaded(function () {
    KTUsersList.init();
});









//--------------------- update


"use strict";


$('.edit_data').click(function(){
	const userid = $(this).attr("id");  
    const element = document.getElementById('kt_modal_edit_user1'+userid);
    const form = element.querySelector('#kt_modal_edit_user_form'+userid);
    const modal = new bootstrap.Modal(element);

   


        var validator = FormValidation.formValidation(
			
            form,
            {
                fields: {
                    'username1': {
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
								url: '_crud.php',
								data: {
									username1: 'username1',
									u1: 'u1'
								
								},
								type: 'GET'
							},
                        }
                    },
				'avatar1': {
                validators: {
                   
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
        

					
                    'email1': {
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
								url: '_crud.php',
								data: {
									email1: 'email1',
									e1: 'e1'
								},
								type: 'GET'
							},
                        }
                    },
					'fname1': {
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
					'lname1': {
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
					'password1': {
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
				    'cpassword1': {
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

        const submitButton = element.querySelector('[data-kt-editusers-modal-action="submit"]');
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
                                text: "Successfully updated!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function (result) {
                                if (result.isConfirmed) {

					var form=$('#kt_modal_edit_user_form'+userid)[0];
							var formdata=new FormData(form);
							var id1 = userid;

							$.ajax({
								type: 'POST',
								url: '_crud.php',
								data: formdata,
								enctype: 'multipart/form-data',
								contentType:false,
								processData:false,
								cache: false,
								success: function () {
								form.reset();	
								modal.hide();
								window.location.href = 'users';
								}
								
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

        const cancelButton = element.querySelector('[data-kt-editusers-modal-action="cancel"]');
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

        const closeButton = element.querySelector('[data-kt-editusers-modal-action="close"]');
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
    





});
	








