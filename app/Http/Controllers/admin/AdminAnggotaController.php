<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Anggota;
use Exception;

class AdminAnggotaController extends Controller
{
    //

    private $anggota;

    public function __construct()
    {
        $this->anggota = Anggota::latest();
    }

    public function index(){
        $data_anggota = $this->anggota;
        if(request('nama')){
            $data_anggota->where('nama', 'like','%'.request('nama').'%');
        }
        if(request('ranting')){
            $data_anggota->where('ranting', 'like','%'.request('ranting').'%');
        }
        if(request('cabang')){
            $data_anggota->where('cabang', 'like', '%'.request('cabang').'%');
        }
        if(request('nia')){
            $data_anggota->where('nia', request('nia'));
        }
        
        $appendsPaginate = [
            'nama' => request('nama'),
            'ranting' => request('ranting'),
            'cabang' => request('cabang'),
            'nia' => request('nia')
        ];
        return view('admin.anggota.index', [
            'data_anggota' => $data_anggota->paginate(20),
            'appendsPaginate' => $appendsPaginate
        ]);
    }

    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('21', 'Jihadi unggul prayitno', '$2y$10$ro1oU3KY5qWzUtQqUZELDeZ4dsxyQx1XAKcyX1UH8TM4bDFrOfVBG', '02.07.2020.01.1892', '085859622259', 'jihadiunggul26@gmail.com', 'mantup', 'kabupaten lamongan', 'ranting', 'user', 'fp.png', '11/1/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('22', 'ACMAD MU\'AYIS', '$2y$10$8wG8bvZOMjJmSESM4AkhVO1oJnPpxCv7aEbYFIaMbSrfTg.mz/X9i', '02.07.2017.1469', '089644468734', 'acmad.muayis@gmail.com', 'babat', 'kabupaten lamongan', 'ranting', 'user', 'fp.png', '11/2/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('23', 'Miselan', '$2y$10$gNBSxYfwZt6nC2pdBX9Oh.zGA6UP2BoocvP5CuG4Odmf2W7AftBZW', '02.02.1996.001', '085708292342', 'miselan1964@gmail.com', 'sooko', 'kabupaten mojokerto', 'ranting', 'user', 'fp.png', '11/3/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('24', 'Rachma Fitri Kurniawati', '$2y$10$HSllLgTLM2tpadHg.qc4juZkDHQk6LC8.f4t.iYiGDYVFx2Myxt8.', '02.08.02.2022.00004', '085732117710', 'rachma.fitri5@gmail.com', 'gresik', 'kabupaten gresik', 'ranting', 'user', 'fp.png', '11/4/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('25', 'M. BACHRUL ULUM', '$2y$10$F4KZU17olV4v5znXm17FL.xrupfWyOFj5v1p1LNIpMKt/DPIpj3Wu', '02.08.02.2022.00014', '0628315896355', 'mbachrululum683@gmail.com', 'duduksampeyan', 'kabupaten gresik', 'ranting', 'user', 'fp.png', '11/5/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('26', 'Eko yulianto', '$2y$10$6GhOZ8NeXbK2a2YKi1vU9OKseTXDM2p9YSOTy4jWMD.lML8cPYitq', '02.02.2011.001', '081515646299', 'ekoyulianto2968@gmail.com', 'bangsal', 'kabupaten mojokerto', 'ranting', 'user', 'fp.png', '11/6/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('27', 'Abdul rohman', '$2y$10$m8LDs4WN.6O062mEiCcuiuY2H4Mcb0eWBvk5.rsPLWKX5nu7KiN5K', '02.02.2021.001', '083846174833', 'rohmanabd@gmail.com', 'gondang', 'kabupaten mojokerto', 'ranting', 'user', 'fp.png', '11/7/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('28', 'M. Rifki zam zami', '$2y$10$S5rR6oe0ZSfAZp9BKyTDvOn3A4YBrVOLEX10MJBlz3ChJSvH.6CXa', '02.08.02.2019.0014', '06285730405859', 'zamikancil132@gmail.com', 'cerme', 'kabupaten gresik', 'ranting', 'user', 'fp.png', '11/8/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('29', 'Moh.Afif', '$2y$10$vkbeSCjSC/roDo0MSugtGuVrscVN/NE4k7BnHl8OMtnXwU/ZqGPMG', '02.01.1998.0033', '089525363419', 'rasendria96@gmail.com', 'tandes', 'kota surabaya', 'ranting', 'user', 'fp.png', '11/9/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('30', 'Harisab', '$2y$10$c89MIuqTNoo1daXJztIrW./thFeU4sfIQPnKckWhC4sjcpB1tevtu', '05.14.0379', '085231139198', 'harisabdharma57@gmail.com', 'giligenteng', 'kabupaten sumenep', 'ranting', 'user', 'fp.png', '11/10/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('31', 'Mohammad Ghiffari Arfandi', '$2y$10$OsoQ95tjrE7lmzbrk6oF1.B0/syfI7576ozSH3n/GTmmZvYS0XVbi', '02.07.2014.0000', '085746920009', 'ghiffariarfandi0@gmail.com', 'deket', 'kabupaten lamongan', 'ranting', 'user', 'fp.png', '11/11/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('32', 'Muhammad Ulul A', '$2y$10$3HbX6/0bscofK9SgJYTzzOUnup3m6uqG4Khuk0uql20rzZq33XvYS', '02.07.2021.00000', '082333551372', 'ulula6637@gmail.com', 'sekaran', 'kabupaten lamongan', 'ranting', 'user', 'fp.png', '11/12/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('36', 'Andik Nurhalili', '$2y$10$QSNG.gDAfMKuPegzufo9WuuOZ5.Okcuhe/6MxjTPTyzjyJso3EFlm', '10.10.0 625', '082132308874', 'andiknurhalilipps04@gmail.com', 'sambeng', 'kabupaten lamongan', 'ranting', 'user', 'fp.png', '11/13/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('37', 'Test', '$2y$10$jNRFTZvCfDNVcXRPJgX3euag1SqoY12HxcJdwNaxaayRGlgsIDOdy', '1213.4343.3433.3535', '082230736205', 'example31@gmail.com', 'ngoro', 'kabupaten mojokerto', 'ranting', 'user', 'fp.png', '11/14/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('38', 'Muhammad ziaul khaq', '$2y$10$.W3t/J9IfzAnIxSYciFCsuqf3V8Ugg8SKedxidwjUNo5xmwFvfSKu', '00.00.0000.000', '085785864086', 'muhammadziaulkhaq2206@gmail.com', 'glagah', 'kabupaten lamongan', 'ranting', 'user', 'fp.png', '11/15/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('39', 'Muhammad safi\'i', '$2y$10$mBssTKk5Gjs33aj5UdKbweTioEW3JH7xA1xGQKUGSpSrUav51n0ga', '00.000.0000.00', '085735473982', 'msyafii2356@gmail.com', 'tikung', 'kabupaten lamongan', 'ranting', 'user', 'fp.png', '11/16/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('40', 'Feri Setiawan', '$2y$10$i/k61t4hTpJKCEjw38wv9uF0bsrJ3CETfFIG3AAgKcKxbwAizLoBG', '002.08.2014.00057.0', '0895363333363', 'feris5420@gmail.com', 'widang', 'kabupaten tuban', 'ranting', 'user', 'fp.png', '11/17/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('41', 'Joko Purnomo', '$2y$10$iMkwxAnmc1yLRjk1/cl8NueY2uDifSHvPzDCh1Jue7Zr0NWBlpF0O', '002.08.2005.00010.0', '08813129263', 'Jokop893@gmail.com', 'palang', 'kabupaten tuban', 'ranting', 'user', 'fp.png', '11/18/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('42', 'Ari Susanto', '$2y$10$YC1SvbpRaqEvMRsfApHRQuP5Pvq2OK3dyi4WDeXinIT/Eg2UMtKrS', '002.08.2014.00072', '085604860045', 'arissnt22@gmail.com', 'semanding', 'kabupaten tuban', 'ranting', 'user', 'fp.png', '11/19/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('43', 'Dwi Sri Wulandari', '$2y$10$c3R2e8XzG/4CAaPKyXchN.vXyRBZ9FUXBEbCqvhryXXg7ym3C10m.', '02.22.2020.033', '081216779456', 'wulansaja2324@gmail.com', 'sumbermanjing', 'kabupaten malang', 'ranting', 'user', 'fp.png', '11/20/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('44', 'Heri Noverianto', '$2y$10$LrCLsPyyUZuAK8Nj2qv.xuD8yrDTBCiFC.UhFZve1WJnqptBLpFAi', '02.22.2021.084', '082233332167', 'Herykws@gmail.com', 'pakisaji', 'kabupaten malang', 'ranting', 'user', 'fp.png', '11/21/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('45', 'Kasmuri', '$2y$10$SA0MWQAkasz6IuYNlBUI0eRs.4krhmocKn17RoqzhHaf9NrUy64Yq', '02.22.2000.004', '085790424176', 'garengpungs820@gmail.com', 'sumber pucung', 'kabupaten malang', 'ranting', 'user', 'fp.png', '11/22/23 5:20');

    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('4', 'MUHAMMAD ISMAIL', '$2y$10$nCU93u3dTxcYknBVx0RlVugqYM1woFU16mjJH6MrHm0P57mJIUMZu', '02.07.2010.0729', '085746946485', 'ciptasejatilamongan1996@gmail.com', 'null', 'kabupaten lamongan', 'cabang', 'user', 'fp.png', '11/13/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('5', 'ACHMAT IN\'AM ARZAQI', '$2y$10$vG39O.uT8iZjpXpE8wOPX.ykLXc2HFPAQlXZMxMDM9torFa.P9V3m', '02.07.2008.0453', '085703561196', 'pcs96.co@gmail.com', 'null', 'kabupaten lamongan', 'cabang', 'user', 'fp.png', '11/14/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('7', 'TAUFIQ QURROHMAN', '$2y$10$XUdAGLcJViC.47tDBoIsPuQwxA8Mg4DMJlgyRaC.GgwAd73PZVM6O', '02.21.2018.08.006', '082230960750', 'taufiqrohman582@gmail.com', 'null', 'kabupaten lumajang', 'cabang', 'user', 'fp.png', '11/15/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('9', 'BAMBANG IRAWAN', '$2y$10$UBqqViMpV6u48hkbzrKtpuurJzYqogNOYyHUU5PEeSLVZy6evRFFS', '02.08.131084.1999.009', '0857362701480', 'bambangirawan52665@gmail.com', 'null', 'kabupaten gresik', 'cabang', 'user', 'fp.png', '11/16/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('10', 'MUCHSIN AL AMIN', '$2y$10$X8ynEo50u8VsvA/TPfuwC.1t8TCqInBRa/9jwcqPKzw0/okN.4CqW', '02.00.0000.0000', '085708217095', 'ciptasejatiblitar@gmail.com', 'null', 'kabupaten blitar', 'cabang', 'user', 'fp.png', '11/17/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('11', 'MOCHAMMAD KHOIRUL HUDA', '$2y$10$dDQ14NyUlHIMHXlng2bRh.yd1bGdM740rJ0AVJz64Hr/JjhczdiJq', '02.08.2011.00007', '085749394001', 'hudasibejo@gmail.com', 'null', 'kabupaten tuban', 'cabang', 'user', 'fp.png', '11/18/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('15', 'MUHAMMAD ANWAR IBRAHIM', '$2y$10$mEoPUm5Frmy7GqOG5CO3O.qC4hBxcIk2Tm4ReiqVvhHUEBmH6A.Zm', '02.018.2019.005', '085708818638', 'anwaribrahimmuhammad@gmail.com', 'null', 'kabupaten banyuwangi', 'cabang', 'user', 'fp.png', '11/19/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('16', 'CHOIRUL SOLEH', '$2y$10$Yc6I4K0Ezxg9PhNXe4v.BuULBzt8VEEyFVmhA5nmizg9vNkwRi1du', '02.02.2022.0001', '085755871790', 'cakroelkeles@gmail.com', 'null', 'kabupaten mojokerto', 'cabang', 'user', 'fp.png', '11/20/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('18', 'SENDI DWI PUTRA DHARMAWAN', '$2y$10$rzkgugMA/xyisxEm.O2pcu2kFTwgqfSN3Nc49yoCGgxMgrdCABy12', '002.014.2014.1562', '082302434637', 'sendibilla@gmail.com', 'null', 'kabupaten sumenep', 'cabang', 'user', 'fp.png', '11/21/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('19', 'EKA FITRI NOVIA D', '$2y$10$OePL1Z4aGfWIUCJwIk0b8egqEylqDTcC0N8RJfgfNIanZ12RoDrTS', '02.00.0000.0002', '082322615777', 'ciptasejatimalang@gmail.com', 'null', 'kabupaten malang', 'cabang', 'user', 'fp.png', '11/22/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('20', 'NUR KHARISMA F', '$2y$10$kH5crGeEAh7/JCqts5k3su1aoJ1/kxP70zejHH6r/ihqs0g9dHd/q', '02.01.2017.0001', '085236738955', 'ny.afif@gmail.com', 'null', 'kota surabaya', 'cabang', 'user', 'fp.png', '11/23/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('33', 'sas', '$2y$10$09Rjyr4kjtTHJ7tp7QlnWej15bnqQytPpwdzXaGxrgRTP8.c7u/Z2', '1213.4343.3533.3531', '082230736205', 'yuliantoryan64@gmail.com', 'null', 'kabupaten mojokerto', 'cabang', 'user', 'fp.png', '11/24/23 5:20');
    // INSERT INTO users (id, username, password, nia, telp, email, ranting, cabang, role, verified, image, created_at) VALUES ('35', 'coba@gmail.com', '$2y$10$d5J1aMNkNAZnrghIE3i43.kzSkWwWHrupIkpKnptBSu.C/02PdzY2', '1213.4343.3433.3531', '082230736205', 'coba@gmail.com', 'null', 'kabupaten mojokerto', 'cabang', 'user', 'fp.png', '11/25/23 5:20');
   
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('1.jpg', 'RICKY DIMAS PRAYOGA', '002.08.2023.00015', 'TUBAN,14 SEPTEMBER 2006', 'DSN. KUWU DS. PENIDON KEC. PLUMPANG KAB. TUBAN', 'widang', 'kabupaten tuban', 'Hijau (Dasar 1)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('2.jpg', 'mohammad fendi ardiansyah', '002.08.2015.00002', 'Tuban, 23 Febuary 1999', 'Dsn kedung Rt 05/rw 01.kedungharjo Widang', 'widang', 'kabupaten tuban', 'Biru ( Dasar 2)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('3.jpg', 'Maxwell Hevan Aulia Hakim', '002.08.2021.00019', '31 Desember 2007', 'Ds. Banjar Kec. Widang Kab. Tuban', 'widang', 'kabupaten tuban', 'Biru ( Dasar 2)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('4.jpg', 'FERI SETIAWAN', '002.08.2014.00057', 'Tuban, 25 Mei 2000', 'DESA BANJAR RT.02/01 KEC.WIDANG KAB.TUBAN', 'widang', 'kabupaten tuban', 'Coklat ( Asisten Pelatih)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('5.jpg', 'MUHAMMAD KHOIRUN NIZAM', '002.08.2023.00013', 'BOJONEGORO, 17 MEI 2005', 'DESA WIDANG DUSUN KUWU RT.03/RW.10 KECAMATAN WIDANG KABUPATEN TUBAN', 'widang', 'kabupaten tuban', 'Hijau (Dasar 1)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('6.jpg', 'BUDI HARIYANTO', '002002.08.2023.00005', 'TUBAN, 06 JUNI 1976', 'Ds. Banjar Kec. Widang Kab. Tuban', 'widang', 'kabupaten tuban', 'Kuning (Pemula)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('7.jpg', 'LISTYOWATI', '002.08.2023.00001', 'TUBAN, 01 NOVEMBER 1977', 'Ds. Banjar Kec. Widang Kab. Tuban', 'widang', 'kabupaten tuban', 'Kuning (Pemula)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('8.jpg', 'sudrajat', '002.08.2022.0043', 'tuban,25 juni 2008', 'ds.minohorejo kec.widang kab.tuban', 'widang', 'kabupaten tuban', 'Pemula (kuning)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('9.jpg', 'Muhammad Syafi\'i', '002.007.2019.001780', 'Lamongan, 17 November  2001', 'Dsn. Pulo Ds. Jotosanur', 'tikung', 'kabupaten lamongan', 'Hijau',  '39');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('10.jpg', 'MOCH. SYAMSUDIN. ROMADHONI', '00.00.0000.0000', 'Lamongan, 11 oktober 2004', 'Dsn. Dukuhan Ds. Bakalanpule', 'tikung', 'kabupaten lamongan', 'Hijau',  '39');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('11.jpg', 'winarsih', '002.08.2021.00003', 'tuban,18 mei 2003', 'dsn.gowah rt/rw (001/003) ds.minohorejo kec.widang kab.tuban', 'widang', 'kabupaten tuban', 'Biru ( Dasar 2)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('12.jpg', 'IMAM FATONI', '002.08.2021.00026', 'Tuban, 30 Juni 2000', 'Ds. Banjar Kec. Widang Kab. Tuban', 'widang', 'kabupaten tuban', 'Biru ( Dasar 2)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('13.jpg', 'Mochamad Khoirul Huda', '002.08.2011.00007', 'Tuban, 19 Juli 1994', 'Ds. Widang Kec. Widang', 'widang', 'kabupaten tuban', 'Hitam I (Pelatih Muda)',  '40');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('14.jpg', 'MUHAMMAD AMIRUDIN AMRULLAH', '002.007.2020.001786', 'Lamongan, 18 Juli 1991', 'Ds. Gembong, Kec. Babat', 'babat', 'kabupaten lamongan', 'Tingkat Dasar II',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('15.jpg', 'Syaifudin Firmansyah', '02.07.2018.001602', 'Lamongan, 28 mei 2000', 'Pelang - kembangbahu', 'tikung', 'kabupaten lamongan', 'Biru',  '39');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('16.jpg', 'AHMAD SYARIFUDIN', '002.007.0000.00001', 'Lamongan, 08 April 2000', 'DS.kuripan dsn payaman kec babat kab lamongan', 'babat', 'kabupaten lamongan', 'Tingkat Dasar II',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('17.jpg', 'Jauhar Tantowi Rakhmadi', '002.007.2023.001968', 'Bojonegoro,19-05-2008', 'Graha Indah', 'lamongan', 'kabupaten lamongan', 'Kuning',  '12');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('18.jpg', 'Muhammad Ziaul Khaq', '00.000.000', 'Lamongan, 22 juni 1997', 'Tanggungprigel-Glagah-Lamongan', 'glagah', 'kabupaten lamongan', 'Sabuk biru',  '38');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('19.png', 'A Ibad Ardhiansyah', '002.007.2023.001965', 'Lamongan, 16-03-2008', 'Banjar Mendalan', 'lamongan', 'kabupaten lamongan', 'Kuning',  '12');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('20.png', 'Dimas Ananda Jova', '002.007.2023.001969', 'Lamongan, 26-05-2006', 'Deket', 'lamongan', 'kabupaten lamongan', 'Kuning',  '12');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('21.jpg', 'AHMAD MUHAMMAD', '002.007.2018.001560', 'Lamongan, 11 Oktober 1993', 'Ds. Plaosan, Kec. Babat, Kab. Lamongan', 'babat', 'kabupaten lamongan', 'Asisten Pelatih',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('22.jpg', 'MISBAHUL ABIDIN', '002.007.2022.001944', 'Lamongan, 6 Februari 2006', 'Dsn. Ploro, Ds. Sumurgenuk, Kec. Babat', 'babat', 'kabupaten lamongan', 'Tingkat Dasar I',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('23.jpg', 'NOVAN BAKHTIAR R', '002.007.2011.00986', 'Lamongan, 13 Mei 1995', 'Ds. Gembong, Kec. Babat', 'babat', 'kabupaten lamongan', 'Tingkat Dasar II',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('24.png', 'MUHAMMAD RYAN ADITYA', '002.007.2022.001911', 'Lamongan, 2 Juli 2006', 'Ds. Gembong, Kec. Babat', 'babat', 'kabupaten lamongan', 'Tingkat Dasar I',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('25.jpeg', 'Dicky Septiawan Rahmadan', '002.007.2020.001874', 'Surabaya, 28-09-2006', 'Banjar Mendalan', 'lamongan', 'kabupaten lamongan', 'Biru',  '12');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('26.png', 'IVAN MAULANA', '002.007.2022.001912', 'Lamongan, 7 Maret 2006', 'Ds. Gembong, Kec. Babat', 'babat', 'kabupaten lamongan', 'Tingkat Dasar I',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('27.jpg', 'M. ACHWAN', '96.10.0148', 'Lamongan, 9 Maret 1973', 'Jl. A.yani RT.03/ RW.04, Dsn. Ploro, Ds. Sumurgenuk, Kec. Babat', 'babat', 'kabupaten lamongan', 'Pelatih Muda',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('28.png', 'M. RISQI IZZANUDIN', '002.007.2018.001561', 'Lamongan, 23 Agustus 2005', 'Dsn. Ploro, Ds. Sumurgenuk, Kec. Babat', 'babat', 'kabupaten lamongan', 'Tingkat Dasar I',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('29.jpg', 'ACMAD MU\'AYIS', '002.007.2017.1469', 'Lamongan, 25 November 2000', 'Jl. Pattimura RT.02/ RW.01, Ds. Plaosan', 'babat', 'kabupaten lamongan', 'Asisten Pelatih',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('30.jpg', 'EGGY RINNALDO', '002.007.2017.1440', 'Lamongan, 28 Oktober 1996', 'Jl. Kesadaran Desa Bedahan-Babat', 'babat', 'kabupaten lamongan', 'Asisten Pelatih',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('31.jpg', 'KHUSMIANTO', '02.07.96.10.0147', 'Lamongan, 20 Juli 1982', 'Desa Kebalanpelang, Kecamatan Babat', 'babat', 'kabupaten lamongan', 'Asisten Pelatih',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('32.jpg', 'Nanda Julian Tri W', '002.007.2020.001807', 'Lamongan, 08-07-2004', 'Banjar Mendalan', 'lamongan', 'kabupaten lamongan', 'Biru',  '12');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('33.jpg', 'Dafit Ari Widianto', '002.007.2018.01676', 'lamongan,24/04/2001', 'Balongrejo,Sambeng, Lamongan', 'sambeng', 'kabupaten lamongan', 'Biru',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('34.jpg', 'April wahyu f', '002.007.2015.01365', 'Mojokerto,21/04/2003', 'simongagrok,Dawarblandong, Mojokerto', 'sambeng', 'kabupaten lamongan', 'Biru',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('35.jpg', 'Febri heri Saputra', '11.10.0.887', 'Mojokerto,03/02/1998', 'simongagrok,Dawarblandong, Mojokerto', 'sambeng', 'kabupaten lamongan', 'asisten pelatih',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('36.jpg', 'Supriadi', '98.10.0359', 'Lamongan,27/07/1988', 'Balongrejo,Sambeng, Lamongan', 'sambeng', 'kabupaten lamongan', 'Biru',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('37.jpg', 'Juwanto', '24/12/2009', 'Lamongan,08/08/1987', 'balongrejo,Sambeng,Lamongan', 'sambeng', 'kabupaten lamongan', 'Biru',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('38.jpg', 'Miftakul Huda', '002.007.2015.01378', 'Mojokerto,30/04/1999', 'Genceng, Dawarblandong, Mojokerto', 'sambeng', 'kabupaten lamongan', 'kuning',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('39.jpg', 'Muslimin', '09.10.0517', 'Lamongan,29/03/1990', 'Ranggon,Sambeng,Lamongan', 'sambeng', 'kabupaten lamongan', 'Hijau',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('40.jpg', 'Akhmad yeni', '98.10.0429', 'Lamongan,17/02/1991', 'Tritunggal,babat,lamongan', 'sambeng', 'kabupaten lamongan', 'Biru',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('41.jpg', 'M.khoirul Anam', '04.11.2018', 'Lamongan,08/03/1993', 'pucuk,Dawarblandong,Mojokerto', 'sambeng', 'kabupaten lamongan', 'Biru',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('42.jpg', 'Siswahyudi', '31.03.2002', 'Lamongan,05/06/1987', 'simorukun, Dawarblandong,mojokerto', 'sambeng', 'kabupaten lamongan', 'asisten pelatih',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('43.jpg', 'Imam mahfudi', '002.007.0000.0000', 'Mojokerto,22/02/1984', 'cendoro,Dawarblandong,mojokerto', 'sambeng', 'kabupaten lamongan', 'asisten pelatih',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('44.jpg', 'Ibnu Wijayanto', '002.007.2010.01193', 'Lamongan,28/12/1988', 'Selorejo,kecamatan,Lamongan', 'sambeng', 'kabupaten lamongan', 'Biru',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('45.jpg', 'Andik Nurhalili', '10.10.0 625', 'Lamongan,04/11/1993', 'desa Selorejo,kecamatan Sambeng', 'sambeng', 'kabupaten lamongan', 'biru',  '36');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('46.jpg', 'AKHMAD ZULIAWAN', '002.007.2015.00001387', 'Lamongan, 16 Mei 1996', 'Dsn.beru Ds.gembong Kec.Babat Kab.Lamongan', 'babat', 'kabupaten lamongan', 'Tingkat Dasar II',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('47.jpg', 'MUHAMMAD AMIR MAULANA', '002.007.2020.001787', 'Lamongan, 18-07-2007', 'Ds. Gembong, Kec. Babat', 'babat', 'kabupaten lamongan', 'Tingkat Dasar II',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('48.jpg', 'M. KASPA\'I', '02.05.96.0001', 'Lamongan, 05-06-1980', 'jln.ahmad Yani RT.04/ RW 04, Dsn. Ploro, Ds. Sumurgenuk, Kec. Babat', 'babat', 'kabupaten lamongan', 'Asisten Pelatih',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('49.jpg', 'MISBAKHUL MUNIR', '13.10.1242', 'Lamongan, 28-11-1996', 'Dsn. Ploro RT.04/ RW.04, Ds. Sumurgenuk, Kec. Babat', 'babat', 'kabupaten lamongan', 'Tingkat Dasar II',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('50.jpg', 'MOCH. AFFRIZAL', '12.10.1097', 'Lamongan, 27-06-1990', 'Desa Truni, Kecamatan Babat', 'babat', 'kabupaten lamongan', 'Pelatih Muda',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('51.jpg', 'ALEX ADITIYA', '02.07.2011.0991', 'Lamongan, 06 Febuari 1998', 'Nginjen deket lamongan', 'deket', 'kabupaten lamongan', 'Hitam satu',  '31');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('52.jpg', 'KHOIRUL HUDA', '02.07.0000.0000', 'Lamongan, 15-05-1978', 'Desa Kebalanpelang, Kecamatan Babat', 'babat', 'kabupaten lamongan', 'Pelatih Muda',  '22');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('53.jpeg', 'SEPTIAN BUDIANTO', '02.07.2022.0000', 'Lamongan, 05 September 2000', 'Sidore keset lamongan', 'deket', 'kabupaten lamongan', 'Biru',  '31');
    // INSERT INTO anggotas (image, nama, nia, ttl, alamat, ranting, cabang, tingkatan, admin_id) VALUES ('54.jpg', 'AHMAD ISMAIL', '02.07.2024.0989', 'Lamongan, 12 Mei 2012', 'Puter Kembangbahu Lamongan', 'kembangbahu', 'kabupaten lamongan', 'SABUK HIJAU',  '6');
    
    public function delete($id){
        Anggota::where('id',$id)->delete();

        try{
            return redirect()->back()->with('toast_success', 'Berhasil Menghapus Anggota');
        }catch(Exception $e){
            return redirect()->back()->with('toast_error', 'Gagal Menghapus Anggota');
        }
    }
}
