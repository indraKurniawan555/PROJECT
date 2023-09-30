package peminjamanonline;

import static peminjamanonline.Main.datauser;

class Admin extends PinjamanOnline {
//    String nama, pass;
//    public Admin (String nickname,String yourpassword){
//        this.nama=nickname;
//        this.pass=yourpassword;
//    }
    public Admin(){

    }
    
    public void tampilData(){
        for (User user : datauser) {
            System.out.println(user.getNama());
            System.out.println(user.getJumlah());
            System.out.println(user.getBunga());
            System.out.println(user.getSaldo());
        }
    }
    @Override
    public String getUsername(){
        return username;
    }
    @Override
    public void setUsername(String username){
        this.username=username;
    }
    @Override
    public String getPassword(){
        return password;
    }
    @Override
    public void setPassword(String password){
        this.password=password;
    }
}