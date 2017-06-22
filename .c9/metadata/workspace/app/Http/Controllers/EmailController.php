{"filter":false,"title":"EmailController.php","tooltip":"/app/Http/Controllers/EmailController.php","undoManager":{"mark":56,"position":56,"stack":[[{"start":{"row":8,"column":5},"end":{"row":8,"column":6},"action":"remove","lines":["/"],"id":2}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":5},"action":"remove","lines":["/"],"id":3}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"remove","lines":["    "],"id":4}],[{"start":{"row":7,"column":1},"end":{"row":8,"column":0},"action":"remove","lines":["",""],"id":5}],[{"start":{"row":7,"column":1},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":6},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"remove","lines":["    "],"id":7}],[{"start":{"row":8,"column":0},"end":{"row":13,"column":33},"action":"insert","lines":["$user = User::find(1)->toArray();","    Mail::send('emails.mailEvent', $user, function($message) use ($user) {","        $message->to($user->email);","        $message->subject('Mailgun Testing');","    });","    dd('Mail Send Successfully');"],"id":8}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "],"id":9}],[{"start":{"row":8,"column":36},"end":{"row":8,"column":37},"action":"remove","lines":[";"],"id":10}],[{"start":{"row":8,"column":36},"end":{"row":8,"column":37},"action":"insert","lines":[";"],"id":11}],[{"start":{"row":7,"column":1},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":8,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["public function send(Request $request)","    {"],"id":13}],[{"start":{"row":15,"column":33},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    "],"id":16},{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"insert","lines":["}"]}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "],"id":17},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]},{"start":{"row":15,"column":0},"end":{"row":15,"column":4},"action":"insert","lines":["    "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":37},"action":"remove","lines":["dd('Mail Send Successfully');"],"id":18}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":68},"action":"insert","lines":["return response()->json(['message' => 'Request completed']);"],"id":19}],[{"start":{"row":10,"column":8},"end":{"row":15,"column":68},"action":"remove","lines":["$user = User::find(1)->toArray();","        Mail::send('emails.mailEvent', $user, function($message) use ($user) {","            $message->to($user->email);","            $message->subject('Mailgun Testing');","        });","        return response()->json(['message' => 'Request completed']);"],"id":20}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":8},"action":"remove","lines":["    "],"id":21}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"remove","lines":["    "],"id":22}],[{"start":{"row":10,"column":0},"end":{"row":20,"column":11},"action":"insert","lines":["        $title = $request->input('title');","        $content = $request->input('content');","","        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)","        {","","            $message->from('me@gmail.com', 'Christian Nwamba');","","            $message->to('chrisn@scotch.io');","","        });"],"id":23}],[{"start":{"row":18,"column":26},"end":{"row":18,"column":42},"action":"remove","lines":["chrisn@scotch.io"],"id":24},{"start":{"row":18,"column":26},"end":{"row":18,"column":27},"action":"insert","lines":["a"]}],[{"start":{"row":18,"column":27},"end":{"row":18,"column":28},"action":"insert","lines":["l"],"id":25}],[{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"insert","lines":["i"],"id":26}],[{"start":{"row":18,"column":29},"end":{"row":18,"column":30},"action":"insert","lines":["s"],"id":27}],[{"start":{"row":18,"column":30},"end":{"row":18,"column":31},"action":"insert","lines":["o"],"id":28}],[{"start":{"row":18,"column":31},"end":{"row":18,"column":32},"action":"insert","lines":["n"],"id":29}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":["e"],"id":30}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["u"],"id":31}],[{"start":{"row":18,"column":34},"end":{"row":18,"column":35},"action":"insert","lines":["r"],"id":32}],[{"start":{"row":18,"column":35},"end":{"row":18,"column":36},"action":"insert","lines":["o"],"id":33}],[{"start":{"row":18,"column":36},"end":{"row":18,"column":37},"action":"insert","lines":["p"],"id":34}],[{"start":{"row":18,"column":37},"end":{"row":18,"column":38},"action":"insert","lines":["a"],"id":35}],[{"start":{"row":18,"column":38},"end":{"row":18,"column":39},"action":"insert","lines":["@"],"id":36}],[{"start":{"row":18,"column":39},"end":{"row":18,"column":40},"action":"insert","lines":["g"],"id":37}],[{"start":{"row":18,"column":40},"end":{"row":18,"column":41},"action":"insert","lines":["m"],"id":38}],[{"start":{"row":18,"column":41},"end":{"row":18,"column":42},"action":"insert","lines":["a"],"id":39}],[{"start":{"row":18,"column":42},"end":{"row":18,"column":43},"action":"insert","lines":["i"],"id":40}],[{"start":{"row":18,"column":43},"end":{"row":18,"column":44},"action":"insert","lines":["l"],"id":41}],[{"start":{"row":18,"column":44},"end":{"row":18,"column":45},"action":"insert","lines":["."],"id":42}],[{"start":{"row":18,"column":45},"end":{"row":18,"column":46},"action":"insert","lines":["c"],"id":43}],[{"start":{"row":18,"column":46},"end":{"row":18,"column":47},"action":"insert","lines":["o"],"id":44}],[{"start":{"row":18,"column":47},"end":{"row":18,"column":48},"action":"insert","lines":["m"],"id":45}],[{"start":{"row":2,"column":0},"end":{"row":2,"column":31},"action":"remove","lines":["namespace App\\Http\\Controllers;"],"id":46},{"start":{"row":2,"column":0},"end":{"row":7,"column":9},"action":"insert","lines":["namespace App\\Http\\Controllers;","","use Illuminate\\Http\\Request;","use App\\Product;","use App\\Http\\Controllers\\Controller;","use View;"]}],[{"start":{"row":8,"column":0},"end":{"row":9,"column":28},"action":"remove","lines":["","use Illuminate\\Http\\Request;"],"id":47}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"insert","lines":["u"],"id":48}],[{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"insert","lines":["s"],"id":49},{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":3},"end":{"row":8,"column":4},"action":"insert","lines":[" "],"id":50}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":26},"action":"insert","lines":["Illuminate\\Mail\\Mailer"],"id":51}],[{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":[";"],"id":52}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":27},"action":"remove","lines":["use Illuminate\\Mail\\Mailer;"],"id":53}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":1},"action":"insert","lines":["u"],"id":54}],[{"start":{"row":8,"column":1},"end":{"row":8,"column":2},"action":"insert","lines":["s"],"id":55}],[{"start":{"row":8,"column":2},"end":{"row":8,"column":3},"action":"insert","lines":["e"],"id":56}],[{"start":{"row":8,"column":3},"end":{"row":8,"column":4},"action":"insert","lines":[" "],"id":57}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":13},"action":"insert","lines":["use Mail;"],"id":58}],[{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"remove","lines":["use "],"id":59}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":0},"end":{"row":8,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1498162417602,"hash":"41457c348fd99259d597f578e116989ce03422d2"}