<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use App\Student;
use App\User;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Student::orderBy('id','desc')->paginate(20);
        return view('students.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id'   => 'required|exists:users,id|unique:students,user_id',
            'nisn'      => 'required',
            'nis'       => 'required|unique:students,nis',
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama'     => 'required',
            'anak_ke'   => 'required|int',
            'alamat'    => 'required',
            'telp'      => 'required',
            'sekolah_asal' => 'required',
            'diterima_dikelas' => 'required',
            'tanggal_diterima' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu'  => 'required',
            'alamat_ortu' => 'required',
            'telp_rumah' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required'
        ]);

        Student::create([
            'user_id'   => $request->user_id,
            'nisn'      => $request->nisn,
            'nis'       => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama'     => $request->agama,
            'anak_ke'   => $request->anak_ke,
            'alamat'    => $request->alamat,
            'telp'      => $request->telp,
            'sekolah_asal' => $request->sekolah_asal,
            'diterima_dikelas' => $request->diterima_dikelas,
            'tanggal_diterima' => $request->tanggal_diterima,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu'  => $request->nama_ibu,
            'alamat_ortu' => $request->alamat_ortu,
            'telp_rumah' => $request->telp_rumah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'nama_wali'     => $request->nama_wali,
            'alamat_wali'   => $request->alamat_wali,
            'telp_wali'     => $request->telp_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali
        ]);

        return redirect(route('students.create'))
        ->with('success', 'Student create successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'user_id'   => 'required|exists:users,id|unique:students,user_id,'.$student->id,
            'nisn'      => 'required',
            'nis'       => 'required|unique:students,nis,'.$student->id,
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required',
            'agama'     => 'required',
            'anak_ke'   => 'required|int',
            'alamat'    => 'required',
            'telp'      => 'required',
            'sekolah_asal' => 'required',
            'diterima_dikelas' => 'required',
            'tanggal_diterima' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu'  => 'required',
            'alamat_ortu' => 'required',
            'telp_rumah' => 'required',
            'pekerjaan_ayah' => 'required',
            'pekerjaan_ibu' => 'required'
        ]);

        $student->update([
            'user_id'   => $request->user_id,
            'nisn'      => $request->nisn,
            'nis'       => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama'     => $request->agama,
            'anak_ke'   => $request->anak_ke,
            'alamat'    => $request->alamat,
            'telp'      => $request->telp,
            'sekolah_asal' => $request->sekolah_asal,
            'diterima_dikelas' => $request->diterima_dikelas,
            'tanggal_diterima' => $request->tanggal_diterima,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu'  => $request->nama_ibu,
            'alamat_ortu' => $request->alamat_ortu,
            'telp_rumah' => $request->telp_rumah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'nama_wali'     => $request->nama_wali,
            'alamat_wali'   => $request->alamat_wali,
            'telp_wali'     => $request->telp_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali
        ]);

        return redirect(route('students.index'))
        ->with('success', 'Student update successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect(route('students.index'))
        ->with('success', 'Student delete successfuly');
    }

    /**
     * [upload description]
     * @return [type] [description]
     */
    public function upload()
    {
        return view('students.upload');
    }

    /**
     * [import description]
     * @return [type] [description]
     */
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');
        $nama_file = rand().$file->getClientOriginalName();
        $file->move('file_student',$nama_file);
 
        try {
            Excel::import(new StudentsImport, public_path('/file_student/'.$nama_file));
        } catch (\Exception $e) {
            return redirect(route('students.upload'))
            ->with('error', $e->getMessage());
        }
        return redirect(route('students.upload'))
        ->with('success', 'Student import successfuly');
    }
}
