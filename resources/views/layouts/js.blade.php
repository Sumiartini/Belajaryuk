<!-- jQuery -->
<script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('adminlte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('adminlte/plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('adminlte/plugins/sparklines/sparkline.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('adminlte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('adminlte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<!-- Multiple Form -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script> 

<script id="document-template" type="text/x-handlebars-template">
  <tr class="delete_add_more_item" id="delete_add_more_item">

      <td>
        <input type="text" name="task_name[]" value="@{{ task_name }}">
      </td>
      <td>
        <input type="number" class="cost" name="cost[]" value="@{{ cost }}">
      </td>
      <td>
        <input type="" class="cost" name="cost[]" value="@{{ cost }}">
      </td>
      <td>
       <i class="removeaddmore" style="cursor:pointer;color:red;">Remove</i>
      </td>

  </tr>
 </script>

<script type="text/javascript">
 
 $(document).on('click','#addMore',function(){
    
     $('.table').show();

     var task_name = $("#task_name").val();
     var cost = $("#cost").val();
     var source = $("#document-template").html();
     var template = Handlebars.compile(source);

     var data = {
        task_name: task_name,
        cost: cost
     }

     var html = template(data);
     $("#addRow").append(html)
   
     total_ammount_price();
 });

  $(document).on('click','.removeaddmore',function(event){
    $(this).closest('.delete_add_more_item').remove();
    total_ammount_price();
  });

  function total_ammount_price() {
    var sum = 0;
    $('.cost').each(function(){
      var value = $(this).val();
      if(value.length != 0)
      {
        sum += parseFloat(value);
      }
    });
    $('#estimated_ammount').val(sum);
  }
                       
</script>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#tampil_picture').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });
</script>
