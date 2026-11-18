
<footer class="main-footer hytrix-footer">
    <div class="footer-left">
        <span class="footer-copyright">
            &copy; <span id="footerYear"></span>
            <a href="https://hytrix.in" target="_blank">Hytrix Technology</a>.
        </span>
        <span class="footer-rights">All rights reserved.</span>
    </div>

    <div class="footer-version">
        <span class="footer-status-dot"></span>
        Admin Panel
    </div>
</footer>

<style>
    .hytrix-footer {
        background: #ffffff;
        border-top: 1px solid #e5ebf4;
        padding: 15px 22px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 10px;
        color: #71809b;
        font-size: 12px;
        box-shadow: 0 -3px 12px rgba(25, 43, 86, 0.025);
    }

    .footer-left {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 5px;
    }

    .footer-copyright {
        color: #52617e;
        font-weight: 500;
    }

    .footer-copyright a {
        color: #344f91;
        font-weight: 700;
        text-decoration: none;
        transition: .2s;
    }

    .footer-copyright a:hover {
        color: #50a9d5;
    }

    .footer-rights {
        color: #8995a9;
    }

    .footer-version {
        display: flex;
        align-items: center;
        gap: 7px;
        color: #52617e;
        font-weight: 600;
        letter-spacing: .2px;
    }

    .footer-status-dot {
        width: 7px;
        height: 7px;
        background: #50c4a0;
        border-radius: 50%;
        display: inline-block;
    }

    @media(max-width: 576px) {
        .hytrix-footer {
            justify-content: center;
            text-align: center;
            padding: 13px 10px;
        }

        .footer-left {
            justify-content: center;
        }
    }
</style>

<script>
    document.getElementById('footerYear').textContent = new Date().getFullYear();
</script>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('public/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('public/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('public/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('public/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('public/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
