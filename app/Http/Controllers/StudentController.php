<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;


//iki Laravel 7
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index', ['students' => $students]);
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
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */


     //$request - globalus objektas. Neveikia apsaugos
     //$request - lokalus. StoreStudentRequest $request. Jame veikia visos apsaugos
    public function store(StoreStudentRequest $request)
    {
        //susikurti studento objekta
        //is requess paimti duomenis
        //isaugoti objekta duombazeje
        //redirect i studentu index

        $student = new Student();


        // pries lygybe - duomenu bazes stulpelio pavadinimas, uz lygybes - formos lauko name atributas
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->project = $request->project;

        $student->save();

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit',['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        
        //$student - jau esamas studentas
        //is request paimti duomenis
        //objekto vertes is request
        //isaugoti pakeista objekta

        // pries lygybe - duomenu bazes stulpelio pavadinimas, uz lygybes - formos lauko name atributas
        $student->name = $request->name;
        $student->surname = $request->surname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->project = $request->project;

        $student->save(); // ??????

        return redirect()->route('students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index');
    }

    //savo metodu ir vaizdu kurimas

    //Mygtukas istrinti visus studentus(custom veiksmo metoda)
    //Mygtukas kuris kitame puslapyje atvaizduoja visas studentu tematikas(custom vaizdo metodas)

    //MEtodas atsakingas uz vaizda
    //Metodas atsakingas uz veiksma x
    //Pagalbininis metodas(metodas kuris tiesiog naudojamas kitam metode)

   //Jeigu custom metodas atlieka veiksma, jis route faile turi buti aprasytas su post metodu
   //Jeigu custom metodas atsakingas uz vaizda, jis route faile turi buti aprasytas su getMetodu
   
   //Custom metodus galime naudoti ir formose, ir nuorodose     

    public function deleteAll() {
        //duoti nurodyma modeliui isvalyti duombazes lentele Students(geresnis)
        Student::truncate(); //isvalyti duomenu bazes lentele
        return redirect()->route('students.index');

        //
        // gauti visa studentu sarasa ir su ciklu kiekviena individualiai istrinti(geresnis jei norime plesti funkcionaluma iki multiple delete)        
    }

    public function projectList() {

        //gauti visus studentus
        //gauti visus unikalias projektus
        //sukurti masyva, kurio elementai yra projekto vardas
        

        $students = Student::all();
        $projects = [];

        foreach($students as $student) {
            $projects[] = $student->project;
        }

        return view('students.projectlist',['projects' => $projects]);        
    }
}
