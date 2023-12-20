<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function getAllStudents()
    {
        try {
            $students = Student::all();
            return response()->json($students, 200);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function getStudentById($id)
    {
        try {
            $student = Student::findOrFail($id);
            return response()->json($student, 200);
        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 404);
        }
    }

    public function addStudent(Request $request)
    {
        try {
            $student = new Student;
            $student->stud_name = $request->stud_name;
            $student->grade = $request->grade;

            $student->save();

            return response()->json(["message" => "Successfully added student"], 201);

        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 500);
        }
    }

    public function updateStudent(Request $request, $id)
    {
        try {
            $student = Student::findOrFail($id);

            $student->stud_name = $request->stud_name;
            $student->grade = $request->grade;

            $student->save();

            return response()->json(["message" => "Successfully updated student"], 200);

        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 404);
        }
    }

    public function deleteStudent($id)
    {
        try {
            $student = Student::findOrFail($id);

            $student->delete();

            return response()->json(["message" => "Successfully deleted student"], 200);

        } catch (\Exception $e) {
            return response()->json(["message" => $e->getMessage()], 404);
        }
    }
}
