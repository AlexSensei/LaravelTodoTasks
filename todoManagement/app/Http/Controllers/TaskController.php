<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    /**
     * Get all tasks by status
     * 
     * @param $status
     * 
     * @return \Illuminate\Http\Response
     * @return \Http\Task
     */
    public function get_all($status)
    {
        $tasks= DB::table('tasks')
        ->where([
                ['status',$status],
                ['deleted','false']])
                ->get();
        return response($tasks);
    }

    /**
     * Add a new task
     *
     * @param $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {
        $task = $request->input('task');
        DB::table('tasks')
            ->insert(['name' => $task->name,
                    'content' => $task->content,
                    'date' => now(),
                    'priority' => false,
                    'status' => 'pending',
                    'user' => 'implement',
                    'deleted' => false]);

        return 'Still in progress';
    }

    /**
     * Delete certain task
     * 
     * @param $id
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('tasks')->where('id', $id)->delete();
        return response('200');
    }

    /**
     * Update certain task
     * 
     * @param $id
     * @param $request
     *
     * @return \Illuminate\Http\Response
     * @return \Http\Task
     */
    public function update(Request $request, $id)
    {
        return 'Still in progress';
    }
}
