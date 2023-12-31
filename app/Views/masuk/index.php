<main class="container">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <h6 class="border-bottom pb-2 mb-0">Suggestions</h6>

        <div class="alert alert-primary" role="alert">
            Transaksi Masuk
        </div>

        <table class="table caption-top" id="myTableMasuk">
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">QTY Masuk</th>
                    <th scope="col">QTY Temp</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Lokasi Rak</th>
                    <th scope="col">Vendor</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result_count = count($result->results);
                if($result_count < 1) {
                    echo '<tr>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                        echo '<td></td>';
                    echo '</tr>';
                } else {
                    for ($i = 0; $i < $result_count; $i++) {
                        echo '<tr>';
                        echo '<td>' . $result->results[$i]->id_transaksi_masuk . '</td>';
                        echo '<td>' . $result->results[$i]->nama_barang . '</td>';
                        echo '<td>' . $result->results[$i]->qty_masuk . '</td>';
                        echo '<td>' . $result->results[$i]->qty_tmp . '</td>';
                        echo '<td>' . $result->results[$i]->tanggal_masuk . '</td>';
                        echo '<td>' . $result->results[$i]->lokasi_rak . '</td>';
                        echo '<td>' . $result->results[$i]->vendor . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</main>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://getbootstrap.com/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.23/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#myTableMasuk').DataTable();
    });
</script>