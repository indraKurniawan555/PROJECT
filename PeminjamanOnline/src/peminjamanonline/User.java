package peminjamanonline;

import java.util.ArrayList;

public class User extends PinjamanOnline implements InterfaceUser{

    private double jumlah;
    private String nama;
    private String username;
    private double bunga;
    private double denda;
    private long nik;
    private double durasi;
    private String tglpinjam;
    private double bayar;
    private double saldo;
    private double hasil;
    //private double total;


    User(String nama, double jumlah, double denda, long nik, double durasi, String tglpinjam, double bayar, double saldo){
        this.nama = nama;
        this.durasi=durasi;
        this.tglpinjam= tglpinjam;
        this.bayar= bayar;
        this.saldo = saldo;
    }

    User() {
    }
    void setNama(String nama){
        this.nama = nama;
    }
    String getNama(){
        return nama;
    }
    void setNik(long nik){
        this.nik=nik;
    }

    long getNik(){
        return nik;
    }
    void setJumlah(double jumlah){
        this.jumlah = jumlah;
    }
    double getJumlah(){
        return jumlah;
    }
    void setTgl(String tglpinjam){
        this.tglpinjam = tglpinjam;
    }
    String getTgl(){
        return tglpinjam;
    }

    @Override
    public void setBunga() {
        this.bunga = jumlah * 10/100;
        this.hasil = bunga + jumlah;
    }

    @Override
    public double getBunga() {
        return hasil;
    }


    void setDenda(double denda) {
        this.denda= denda;
    }


    double getDenda() {
        return denda;
    }
    void setBayar(double bayar){
        this.bayar = getSaldo()- bayar;
    }

    double getBayar(){
        return bayar;
    }
    @Override
    public void setSaldo(double saldo){
        this.saldo = saldo;
    }
    @Override
    public double getSaldo(){
        return saldo;
    }
    public void tampil() {
        System.out.println("===============================================");
        System.out.println("=           DATA PEMINJAMAN ONLINE             =");
        System.out.println("===============================================");
        System.out.println("Nama Peminjam : " + getNama());
        System.out.println("NIK           : " + getNik());
        System.out.println("Jumlah Pinjam : " + getJumlah());
        System.out.println("Saldo Pinjam  : " + getSaldo());
        System.out.println("Durasi Pinjam : " + getDurasi());
        System.out.println("Tanggal Pinjam: " + getTgl());
        System.out.println("Denda         : " + getDenda());
        System.out.println("===============================================");
        System.out.println("Silahkan melakukan pembayaran ke admin.");
        System.out.println("Terimakasih sudah menggunakan layanan kami.");
        System.out.println("===============================================");

    }
    void setDurasi(double durasi){
        this.durasi = durasi;
    }
    double getDurasi(){
        return durasi;
    }
    @Override
    String getUsername() {
        return username;
    }

    @Override
    void setUsername(String username) {
        this.username = username;

    }

    @Override
    String getPassword() {
        return password;
    }

    @Override
    void setPassword(String password) {
        this.password = password;

    }
//    void update(String nama, int nik, double jumlah, double durasi) {
//        if (nama != null) {
//            this.nama = nama;
//        }
//        if (nik > 0) {
//            this.nik = nik;
//        }
//        if (durasi > 0) {
//            this.durasi = durasi;
//        }
//        if (jumlah > 0) {
//            this.jumlah = jumlah;
//        }
//        if (durasi > 0){
//            this.durasi = durasi;
//        }
//    }

}