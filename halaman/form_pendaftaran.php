<div class="halaman">
    
    <h1>form pendaftaran komunitas kucing</h1>
    <form action="register.php" method="post">
        <fieldset>
            <legend>User login info</legend>
            <p><label for="idusername">Username:</label> <input id="idusername" type="text" name="username" placeholder="username anda" /></p>
            <p><label for="idemail">Email:</label> <input id="iduseremail" type="email" name="email" placeholder="alamat email" /></p>
            <p><label for="idpassword">Password:</label> <input id="idpassword" type="password" name="password" /></p>
        </fieldset>
        <fieldset>
            <legend>Data diri</legend>
            <p><label for="idalamat">Alamat:</label> <input id="idalamat" type="text" name="alamat" placeholder="alamat rumah" /></p>
            <p><label for="idtanggallahir">Tanggal lahir:</label> <input id="idtanggallahir" type="date" name="tanggallahir" /></p>
            <p><label for="idusia">Usia:</label> <input id="idusia" type="number" name="usia" placeholder="usia anda" /></p>
            <p><label>Jenis kelmain:</label>
            <input type="radio" name="jeniskelamin" value="pria"> Pria
            <input type="radio" name="jeniskelamin" value="wanita"> Wanita</p>
        </fieldset>
        <fieldset>
            <legend>Data Jurusan</legend>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="radio" name="jurusan" /> PPLG
                    <input type="radio" name="jurusan" /> RPL
                    <input type="radio" name="jurusan" /> AKL
                    <input type="radio" name="jurusan" /> PH
                    <input type="radio" name="jurusan" /> DKV
                    <input type="radio" name="jurusan" /> MM
                    <input type="radio" name="jurusan" /> TO
                    <input type="radio" name="jurusan" /> TKRO
                    <input type="radio" name="jurusan" /> TBSM
                </td>
            </tr>
            <form action="proses.php" method="get">
                <p>Kelas:
                <select name='KELAS'>
                  <option>kelas anda anda</option>
                  <option value='X-1'>X-1</option>
                  <option value='X-2'>X-2</option>
                  <option value='X-3'>X-3</option>
                  <option value='X-4'>X-4</option>
                  <option value='XI-1'>XI-1</option>
                  <option value='XI-2'>XI-2</option>
                  <option value='XII-2'>XII-1</option>
                  <option value='XII-2'>XII-2</option>
                </select>
        </fieldset>
        <fieldset>
            <p><label for="idagree">Saya bersedia mengikuti aturan komunitas ini</label> <input type="checkbox" name="bersedia_ikut" value="ya" id="idagree"></p>
            <p><input type="reset" value="reset"> <input type="button" name="submit" value="submit" /></p>
        </fieldset>
    </form>
</div>
    
    

