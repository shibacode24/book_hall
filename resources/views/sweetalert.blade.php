<style>
	
.swal2-popup.swal2-toast.swal2-show{

  box-shadow: rgb(255 0 0 / 48%) 0px 3px 8px; !importnat;
}
  .swal2-header
  {
    height: 100px !important;
    {{-- width: 50px !important; --}}
   
  }
  </style>


@if (session()->has('success'))
{{-- @if(1==1) --}}
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "center",
        showConfirmButton: false,
        timer: 6000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: "{{ session()->get('success') }}"
      });
    </script>
@endif

@if (session()->has('error'))
<script>
const Toast = Swal.mixin({
    toast: true,
    position: "center",
    showConfirmButton: false,
    timer: 6000,
    timerProgressBar: true,
    didOpen: (toast) => {
      toast.onmouseenter = Swal.stopTimer;
      toast.onmouseleave = Swal.resumeTimer;
    }
  });
  Toast.fire({
    icon: "error",
    title: "{{session()->get('error')}}"
  });
</script>
@endif
