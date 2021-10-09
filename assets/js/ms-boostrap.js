
        $(document).ready(function(){
            $('.bootstrap-select').selectpicker();
            //GET UPDATE
            $('.update-record').on('click',function(){
                var package_id = $(this).data('package_id');
                var package_name = $(this).data('package_name');
                $(".strings").val('');
                $('#modal-project-edit').modal('show');
                $('[name="edit_id"]').val(package_id);
                $('[name="package_edit"]').val(package_name);
                //AJAX REQUEST TO GET SELECTED PRODUCT
                $.ajax({
                    url: "<?php echo site_url('custom_project_prepared/get_product_by_package');?>",
                    method: "POST",
                    data :{package_id:package_id},
                    cache:false,
                    success : function(data){
                        var item=data;
                        var val1=item.replace("[","");
                        var val2=val1.replace("]","");
                        var values=val2;
                        $.each(values.split(","), function(i,e){
                            $(".strings option[value='" + e + "']").prop("selected", true).trigger('change');
                            $(".strings").selectpicker('refresh');
                        });
                    }
                });
                return false;
            });
            //GET CONFIRM DELETE
            $('.delete-record').on('click',function(){
                var package_id = $(this).data('package_id');
                $('#DeleteModal').modal('show');
                $('[name="delete_id"]').val(package_id);
            });
        });
