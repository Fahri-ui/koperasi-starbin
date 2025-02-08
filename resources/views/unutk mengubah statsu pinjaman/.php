$pinjaman = Pinjaman::find(47);
        $pinjaman->status = 'Aktif';
        $pinjaman->save();