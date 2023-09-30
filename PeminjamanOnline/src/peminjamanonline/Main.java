package peminjamanonline;

import java.util.ArrayList;
import java.util.Scanner;
import javax.swing.JFrame;
import javax.swing.JOptionPane;

public class Main {
    static ArrayList<User> datauser = new ArrayList<>();
    static Scanner input = new Scanner(System.in);
    static User b = new User();

    static Admin a = new Admin();

    private static void login() {
        Scanner input = new Scanner(System.in);
//        PinjamanOnline a = new Admin();
        System.out.println("============ Welcome Admin =============");
        System.out.print("Masukkan Username : ");
        String nama = input.nextLine();
        System.out.print("Masukkan Password : ");
        String pass = input.nextLine();
        System.out.println("===============================================");
        a.setUsername("admin123");
        a.setPassword("admin123");
        if (nama.equals(a.getUsername()) && pass.equals(a.getPassword())) {
            System.out.println("               Login Berhasil     ");
            System.out.println("===============================================");
            menuAdmin();
        } else {
            System.out.println("Data Yang Anda Masukkan Salah!!");
            System.out.println("===============================================");
            System.out.println("\n\n");
            login();
        }
    }

    private static void menuAdmin() {
        Scanner input = new Scanner(System.in);
        System.out.println("=============================================");
        System.out.println("                 Pilih menu                  ");
        System.out.println("=============================================");
        System.out.println("| 1. |  Lihat data                           ");
        System.out.println("| 2. |  Ubah data                            ");
        System.out.println("| 3. |  Hapus data                           ");
        System.out.println("| 4. |  Exit                                 ");
        System.out.println("=============================================");
        System.out.print(" Masukkan pilihan menu : ");
        int select = input.nextInt();
        switch (select) {
            case 1:
                tampilData();
                menuAdmin();
                break;
            case 2:
                ubahData();
                menuAdmin();
                break;
            case 3:
                hapusData();
                menuAdmin();
                break;
            case 4:
                System.out.println("Exit");
                menuAwal();
            default:
                System.out.println("Menu salah, pilih lagi..");
                menuAdmin();
        }
    }

    private static void ubahData() {
        Scanner input = new Scanner(System.in);
        System.out.println("=============================================");
        System.out.println("              Ubah Data Peminjam              ");
        System.out.println("=============================================");
        System.out.print("Masukkan NIK Peminjam yang akan diubah: ");
        long nikUbah = input.nextLong();
        input.nextLine();

        User userUbah = cariNama(nikUbah);
        if (userUbah != null) {
            System.out.println("Data Peminjam sebelum diubah:");
            System.out.println("Nama Peminjam: " + userUbah.getNama());
            System.out.println("Jumlah Pinjaman: " + userUbah.getJumlah());
            System.out.println("Jumlah Pinjaman + bunga yang harus dibayarkan: " + userUbah.getSaldo());
            System.out.println("Durasi: " + userUbah.getDurasi());
            System.out.println("Denda: " + userUbah.getDenda());

            System.out.println("Masukkan data baru:");
            System.out.print("Nama Peminjam: ");
            String namaBaru = input.nextLine();
            System.out.print("Update Jumlah Pinjaman: ");
            double jumlahBaru = input.nextDouble();
            System.out.print("Durasi: ");
            double durasiBaru = input.nextDouble();
            System.out.print("Denda: ");
            double dendaBaru = input.nextDouble();

            userUbah.setNama(namaBaru);
            userUbah.setJumlah(jumlahBaru);
            userUbah.setDurasi(durasiBaru);
            userUbah.setDenda(dendaBaru);
            userUbah.setBunga();
            double bungaBaru = jumlahBaru * 0.10;
            userUbah.setSaldo(jumlahBaru+bungaBaru +userUbah.getDenda());

            System.out.println("Data Peminjam setelah diubah:");
            System.out.println("Nama Peminjam: " + userUbah.getNama());
            System.out.println("Jumlah Pinjaman Awal: " + userUbah.getJumlah());
            System.out.println("Jumlah Pinjaman + bunga yang harus dibayarkan: " + userUbah.getSaldo());
            System.out.println("Durasi: " + userUbah.getDurasi());
            System.out.println("Denda: " + userUbah.getDenda());
        } else {
            System.out.println("Data peminjam dengan NIK " + nikUbah + " tidak ditemukan.");
        }

        menuAdmin();
    }

    public static void tampilData(){
        for (User user : datauser) {
            System.out.println("Nama Peminjam: " + user.getNama());
            System.out.println("NIK: " + user.getNik());
            System.out.println("Jumlah Pinjaman Awal: " + user.getJumlah());
            System.out.println("Jumlah pinjaman + bunga yang harus dibayarkan: " + user.getSaldo());
            System.out.println("Durasi: " + user.getDurasi() + "Bulan");
            System.out.println("Tanggal Peminjaman: " + user.getTgl());
            System.out.println("Denda: " + user.getDenda());
            System.out.println("---------------------------------------------");
        }
    }

    public static void hapusData(){
        Scanner input = new Scanner(System.in);
        System.out.println("=============================================");
        System.out.println("            Hapus Data Peminjam              ");
        System.out.println("=============================================");
        System.out.print("Masukkan NIK Peminjam yang akan dihapus: ");
        long deleteNik = input.nextLong();

        User deleteData = cariNama(deleteNik);
        if (deleteData != null) {
            datauser.remove(deleteData);
            System.out.println("Data peminjam dengan NIK " + deleteNik + " telah dihapus.");
        } else {
            System.out.println("Data peminjam dengan NIK " + deleteNik + " tidak ditemukan.");
        }

        menuAdmin();
    }

    public static void menuUserLoginRegister(){
        Scanner input = new Scanner(System.in);
        System.out.println("============ Daftar =============");
        System.out.print("Masukkan Username : ");
        String username = input.next();
        System.out.print("Masukkan Password : ");
        String password = input.next();
        b.setUsername(username);
        b.setPassword(password);

        System.out.println("============== Berhasil ==============");
        System.out.println("===============================================");
        //System.out.println(b.getUsername());
        //System.out.println(b.getPassword());
//        datauser.add(b);
    }
    public static void loginUser(){
        boolean a = true;
        while (a) {
            System.out.println("============ login =============");
            System.out.print("Masukkan Username : ");
            String nama = input.next();
            System.out.print("Masukkan Password : ");
            String pw = input.next();
            if (nama.equals(b.getUsername()) && pw.equals(b.getPassword())) {
                menuUser();
            } else {
                System.out.println("Tidak terdaftar");
                a = true;
            }
        }
    }


    private static void userPinjam() {
    Scanner input = new Scanner(System.in);
    System.out.println("===============================================");
    System.out.println("=      SELAMAT DATANG DI PINJAMAN ONLINE      =");
    System.out.println("===============================================");
    System.out.print("| Masukkan Nama \t: ");
    String username = input.nextLine();
    
    long nik;
    while (true) {
        System.out.print("| Masukkan NIK \t: ");
        String nikString = input.nextLine();

        if (nikString.length() == 16) {
            try {
                nik = Long.parseLong(nikString);
                User existingUser = cariNama(nik);
                if (existingUser != null) {
                    System.out.println("NIK telah terdaftar. Silakan masukkan NIK yang lain.");
                    continue;
                }
                break;
            } catch (NumberFormatException e) {
                System.out.println("NIK harus berupa angka.");
            }
            } else {
            System.out.println("NIK harus terdiri dari 16 digit.");
        }
    }

    
    System.out.print("| Masukkan jumlah pinjaman \t: Rp ");
    double jumlah = input.nextDouble();
    while (jumlah < 200000 || jumlah > 10000000) {
        System.out.println("Jumlah pinjaman harus minimal 200000 dan maksimal 10000000.");
        System.out.print("| Masukkan jumlah pinjaman \t : Rp ");
        jumlah = input.nextDouble();
    }
    
    double denda = 0;
    System.out.print("| Masukkan durasi pinjaman(bulan) \t: ");
    double durasi = input.nextDouble();
    while (durasi > 13){
        System.out.println("Mohon maaf maksimal durasi pinjaman hanya 12 bulan");
        System.out.print("| Masukkan durasi pinjaman(bulan) \t: ");
        durasi = input.nextDouble();
        
    }
    while (durasi <= 0){
        System.out.println("Mohon maaf maksimal durasi pinjaman hanya 12 bulan");
        System.out.print("| Masukkan durasi pinjaman(bulan) \t: ");
        durasi = input.nextDouble(); 
    }
    input.nextLine();
    System.out.print("| Masukkan tanggal pinjaman \t: ");
    String tglpinjam = input.nextLine();
    double bayar = 0;
    double saldo = 0;
    
    User user1 = new User(username, jumlah, denda, nik, durasi, tglpinjam, bayar, saldo);
    user1.setNama(username);
    user1.setNik(nik);
    user1.getNik();
    user1.setTgl(tglpinjam);
    user1.getNama();
    user1.setJumlah(jumlah);
    user1.setBunga();
    user1.getBunga();
    user1.setSaldo(user1.getBunga());
    user1.tampil();
    datauser.add(user1);
}

    public static void bayar() {
        Scanner input = new Scanner(System.in);
        System.out.println("=============================================");
        System.out.println("                Pembayaran                   ");
        System.out.println("=============================================");
        System.out.print("Masukkan NIK Peminjam: ");
        long nikBayar = input.nextLong();
        input.nextLine();
        User userBayar = cariNama(nikBayar);
        if (userBayar.getSaldo() == 0) {
            System.out.println("Pinjaman telah dilunasi");
        }else{
            if (userBayar != null) {
                System.out.println("Nama Peminjam: " + userBayar.getNama());
                System.out.println("Jumlah Pinjaman: " + userBayar.getJumlah());
                System.out.println("Jumlah pinjaman anda sekarang: " + userBayar.getSaldo());
                System.out.println("Durasi: " + userBayar.getDurasi());
                System.out.println("Denda: " + userBayar.getDenda());

                System.out.print("Masukkan jumlah pembayaran: ");
                double jumlahBayar = input.nextDouble();
                while (jumlahBayar <=0){
                    System.out.println("Pembayaran tidak boleh minus");
                    System.out.print("Masukkan jumlah pembayaran: ");
                    jumlahBayar = input.nextDouble();
                }

                if (jumlahBayar >= userBayar.getSaldo()) {
                    double kembalian =  jumlahBayar -  userBayar.getSaldo();
                    System.out.println("Kembalian anda "+ kembalian);
                    System.out.println("Terima kasih, pembayaran lunas.");
                    //userBayar.setBayar(userBayar.getBunga());
                    double saldoLunas = 0;
                    //userBayar.setBayar(jumlahBayar);
                    userBayar.setSaldo(saldoLunas);
                    //System.out.println("Sisa uang pinjaman anda yang harus dibayarkan :"+userBayar.getSaldo());
                } else {
                    System.out.println("Pembayaran sebagian berhasil.");
                    userBayar.setBayar(jumlahBayar);
                    //userBayar.setBunga();
                    //userBayar.setJumlah(userBayar.getBayar());
                    //userBayar.setJumlah(jumlahBayar);
                    //userBayar.setBunga();
                    //userBayar.setJumlah(userBayar.getSaldo());
                    userBayar.setSaldo(userBayar.getBayar());
                    System.out.println("Sisa uang pinjaman anda yang harus dibayarkan :" + userBayar.getSaldo());
                }
            } else {
                System.out.println("Data peminjam dengan NIK " + nikBayar + " tidak ditemukan.");
            }
        }
    }

    public static void menuUser(){
        Scanner scanner = new Scanner(System.in);
        System.out.println("Menu : ");
        System.out.println("1. Pinjam");
        System.out.println("2. Bayar");
        System.out.println("3. Keluar");
        System.out.print("Pilih Menu :");
        int pilih = scanner.nextInt();
        switch (pilih){
            case 1 :
                userPinjam();
                menuUser();
                break;
            case 2 :
                bayar();
                menuUser();
                break;
            case 3 :
                menuAwal();
            default:
                System.out.println("Menu salah, pilih lagi..");
                menuUser();
        }
    }

    public static void menuAwal(){
        Scanner pilih_menu = new Scanner(System.in);
        System.out.println("=============================================");
        System.out.println("                  MENU                       ");
        System.out.println("=============================================");
        System.out.println("| 1. |  Admin                              |");
        System.out.println("| 2. |  Daftar                               |");
        System.out.println("| 3. |  LOGIN                             |");
        System.out.println("| 4. |  Keluar");
        System.out.println("=============================================");
        System.out.print(" Masukkan pilihan menu : ");
        int pilih = pilih_menu.nextInt();
        switch (pilih){
            case 1:
                login();
                break;
            case 2:
                menuUserLoginRegister();
                menuAwal();
                break;
            case 3:
                loginUser();
                menuAwal();
                break;
            case 4:
                System.exit(0);

            default:
                System.out.println("Menu salah, pilih lagi..");
                menuAwal();
                break;
        }
    }

    public static User cariNama(long nik) {
        for (User user : datauser) {
            if (user.getNik()== nik) {
                return user;
            }
        }
        return null;
    }
    
    public static void main(String[] args) {
        menuAwal();
    }
}