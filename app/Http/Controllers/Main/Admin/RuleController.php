<?php

namespace App\Http\Controllers\Main\Admin;

use App\Http\Requests\RuleRequest;
use App\Models\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $rules=Rule::all();
        return view(('Main.Admin.rule.index'),compact('rules'));
    }

    public function delete($rule_id)
    {
        if($rule_id && ctype_digit($rule_id))
        {
            Rule::destroy($rule_id);
        }
    }

    public function edit($rule_id)
    {
        if($rule_id && ctype_digit($rule_id))
        {
            $ruleItem = Rule::find($rule_id);
            if ($ruleItem && $ruleItem instanceof Rule)
            {
                return view(('Main.Admin.rule.edit'),compact('ruleItem'));
            }
        }
    }

    public function update(RuleRequest $ruleRequest,$rule_id)
    {
        if($rule_id && ctype_digit($rule_id))
        {
            $inputs = [
                'title'=> request()->input('title') ,
                'description' => request()->input('description'),
            ];
            $ruleItem = Rule::find($rule_id);
            $ruleItem->Update($inputs);
            return redirect()->route('admin.rule.index');
        }
    }

    public function store(RuleRequest $ruleRequest)
    {
        $inputs = [
            'title' => request()->input('title') ,
            'description' => request()->input('description') ,
        ];

        Rule::create($inputs);
        return redirect()->route('admin.rule.index');
    }

    public function insert()
    {
        return view(('Main.Admin.rule.insert'));
    }
}
