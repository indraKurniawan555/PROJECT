print("PROGRAM PENDATAAN PENERIMA BANTUAN SOSIAL\n")
gol1 = []
gol2 = []
gol3 = []

def bansos():
    print("Golongan 1 :",gol1)
    print("Golongan 2 :",gol2)

user = -1
while user !=0:
    user = int(input("=== Keterangan Program === \n1. Pendataan \n2. Masukkan bantuan \n3. Cek data \n4. Hapus data \n0. Keluar program \nMasukkan Pilihanmu : "))
    if user == 1 :
        z = int(input("Masukkan Jumlah Data : "))
        for i in range(z):
            print("\n\nData ke-", i+1)
            nama = input("Masukkan Nama kepala keluarga : ")
            kerja = input("Pekerjaan : ")
            pendapatan = int(input("Masukkan pendapatan per bulan : "))
            if pendapatan <= 1200000 :
                usia = int(input("Masukkan usia : "))
                if usia <= 35 :
                    motor = int(input("Jumlah kendaraan bermotor : "))
                    if motor <= 1:
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah(450/900/1350/dst) : "))
                            if listrik == 450 :
                                gol1.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                    elif motor <= 3 :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                    else :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                elif usia <= 50 :
                    motor = int(input("Jumlah kendaraan bermotor : "))
                    if motor <= 1:
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol1.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                    elif motor <= 3 :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                    else :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                else :
                    motor = int(input("Jumlah kendaraan bermotor : "))
                    if motor <= 1:
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol1.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol1.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                    elif motor <= 3 :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                    else :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
            elif pendapatan <= 2200000 :
                usia = int(input("Masukkan usia : "))
                if usia <= 35 :
                    motor = int(input("Jumlah kendaraan bermotor : "))
                    if motor <= 1:
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                    elif motor <= 3 :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                    else :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                elif usia <= 50 :
                    motor = int(input("Jumlah kendaraan bermotor : "))
                    if motor <= 1:
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol2.append(nama)
                            else :
                                gol3.append(nama)
                    elif motor <= 3 :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                    else :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                else :
                    motor = int(input("Jumlah kendaraan bermotor : "))
                    if motor <= 1:
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                    elif motor <= 3 :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                    else :
                        luas_rumah = int(input("Luas tanah rumah dalam meter persegi : "))
                        if luas_rumah <= 50 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol2.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
                        elif luas_rumah <= 100 :
                            listrik = int(input("Tegangan listrik rumah : "))
                            if listrik == 450 :
                                gol3.append(nama)
                            elif listrik == 900 :
                                gol3.append(nama)
                            else :
                                gol3.append(nama)
            else :
                gol3.append(nama)
    elif user == 2:
        print("Masukkan Sumbangan yang diberikan")
        sumbang = int(input("1. Dalam bentuk Tunai \n2. Dalam bentuk barang \nMasukkan Pilihan :"))
        if sumbang == 1:
            uang1 = int(input("Masukkan uang yang diberikan untuk golongan 1 : "))
            uang2 = int(input("Masukkan uang yang diberikan untuk golongan 2 : "))
            totaluang1 = uang1 * len(gol1)
            totaluang2 = uang2 * len(gol2)
            pengeluaran = totaluang1 + totaluang2
        elif sumbang == 2 :
            uang1 = str(input("Masukkan barang yang diberikan untuk golongan 1 :"))
            uang2 = str(input("Masukkan barang yang diberikan untuk golongan 2 :"))
            totaluang1 = (uang1,"Sejumlah",len(gol1))
            totaluang2 = (uang2,"Sejumlah",len(gol2))
            pengeluaran = totaluang1 + totaluang2

    elif user == 3:
        print("\n\nCEK DATA\n")
        data1 = dict.fromkeys(gol1, uang1)
        data2 = dict.fromkeys(gol2, uang2)
        print("Data Nama beserta jumlah bantuan : ",data1,data2)
        print("Total Pengeluaran yang diperlukan : Rp.",pengeluaran)
        print("\n\n\nMohon cek ulang data, jika ada kekeliruan dalam memasukkan data klik pada menu hapus data dan masuk kembali ke menu 1")
        print("Golongan 3",gol3)
    elif user == 4:
        print("Hapus nama yang salah pada penerima bantuan")
        bansos()
        hapus = int(input("Klik 1 jika ingin menghapus golongan 1 \nKlik 2 untuk menghapus golongan 2 \nMasukkan pilihan : "))
        if hapus == 1 :
            gol1.remove(input("Masukkan Nama yang salah pada golongan 1 : "))
        elif hapus == 2 : 
            gol2.remove(input("Masukkan Nama yang sakah pada golongan 2 :"))
        b = str(input("Klik y jika ingin mengupdate : "))
        if b == "y":
            update = int(input("Klik 1 jika ingin mengupdate golongan 1 \nKlik 2 untuk mengupdate golongan 2 \nMasukkan pilihan : "))
            if update == 1:
                ubah = int(input("Masukkan index yang ingin diupdate(dimulai dari 0 dari sebelah kiri) : "))
                gol1[ubah] = input("Masukkan Nama setelah update : ")
            elif update == 2:
                ubah = int(input("Masukkan index yang ingin diapdate(dimulai dari 0 dari sebelah kiri) : "))
                gol2[ubah] = input("Masukkan Nama setelah uppdate : ")
    elif user == 0:
        print("Terima Kasih")
