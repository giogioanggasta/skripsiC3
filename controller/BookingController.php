<?

require_once '../model/BookingModel.php';
require_once '../helper/flash_session.php';

class BookingController
{
    public function __construct()
    {
        $this->bookingModel = new BookingModel();
    }

    public function booking()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'idTransaksi' => trim($_POST['idTransaksi']),
            'tanggalTransaksi' => trim($_POST['tanggalTransaksi']),
            'waktuTransaksi' => trim($_POST['waktuTransaksi']),
            'jenisMobil' => trim($_POST['jenisMobil']),
            'platKendaraan' => trim($_POST['platKendaraan']),
            'jasa1' => trim($_POST['jasa1']),
            'jasa2' => trim($_POST['jasa2']),
            'jasa3' => trim($_POST['jasa3']),
            'catatanPelanggan' => trim($_POST['catatanPelanggan']),
            'totalHarga' => trim($_POST['totalHarga']),
            'status' => 'Menunggu Konfirmasi',
            'buktiPembayaran' => NULL,
        ];
    }
}