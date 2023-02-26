<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
    

<body id="page-top">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Result-SAW</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Normalisasi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Laptop</th>
                                <th scope="col">Nama Kriteria</th>
                                <th scope="col">Jenis Kriteria</th>
                                <th scope="col">Value Bobot</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Normalisasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "../config.php";
                            $sql = "SELECT * FROM vnormalisasi ";
                            $query = mysqli_query($koneksi, $sql);
                            $no = 1;
                            while ($data = mysqli_fetch_assoc($query)) {
                                echo "<tr>";
                                echo "<td>" . $no . "</td>";
                                echo "<td>" . $data['nmalternatif'] . "</td>";
                                echo "<td>" . $data['nm_kriteria'] . "</td>";
                                echo "<td>" . $data['jenis'] . "</td>";
                                echo "<td>" . $data['valuebobot'] . "</td>";
                                echo "<td>" . $data['keterangan'] . "</td>";
                                echo "<td>" . $data['normalisasi'] . "</td>";
                                echo "</tr>";
                                $no++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Alif Radifan Piandy 2022</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/dist/vendor/jquery/jquery.min.js"></script>
    <script src="assets/dist/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/dist/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/dist/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/dist/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/dist/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/dist/js/demo/datatables-demo.js"></script>

</body>

</html>