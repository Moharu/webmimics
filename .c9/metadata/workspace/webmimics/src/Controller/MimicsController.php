{"filter":false,"title":"MimicsController.php","tooltip":"/webmimics/src/Controller/MimicsController.php","undoManager":{"mark":31,"position":31,"stack":[[{"group":"doc","deltas":[{"start":{"row":27,"column":6},"end":{"row":27,"column":10},"action":"remove","lines":["Page"]},{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"insert","lines":["M"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":7},"end":{"row":27,"column":8},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":8},"end":{"row":27,"column":9},"action":"insert","lines":["m"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":9},"end":{"row":27,"column":10},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":10},"end":{"row":27,"column":11},"action":"insert","lines":["c"]}]}],[{"group":"doc","deltas":[{"start":{"row":39,"column":0},"end":{"row":61,"column":42},"action":"remove","lines":["        $path = func_get_args();","","        $count = count($path);","        if (!$count) {","            return $this->redirect('/');","        }","        $page = $subpage = null;","","        if (!empty($path[0])) {","            $page = $path[0];","        }","        if (!empty($path[1])) {","            $subpage = $path[1];","        }","        $this->set(compact('page', 'subpage'));","","        try {","            $this->render(implode('/', $path));","        } catch (MissingTemplateException $e) {","            if (Configure::read('debug')) {","                throw $e;","            }","            throw new NotFoundException();"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":20},"end":{"row":41,"column":5},"action":"remove","lines":["display()","    {","","        }","    }"]},{"start":{"row":37,"column":20},"end":{"row":37,"column":21},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":21},"end":{"row":37,"column":22},"action":"insert","lines":["n"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":22},"end":{"row":37,"column":23},"action":"insert","lines":["d"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":23},"end":{"row":37,"column":24},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":24},"end":{"row":37,"column":25},"action":"insert","lines":["x"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":25},"end":{"row":37,"column":27},"action":"insert","lines":["()"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":27},"end":{"row":37,"column":28},"action":"insert","lines":["}"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":28},"end":{"row":38,"column":0},"action":"insert","lines":["",""]},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"remove","lines":["    "]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":28},"end":{"row":38,"column":0},"action":"remove","lines":["",""]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":27},"end":{"row":37,"column":28},"action":"remove","lines":["}"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":27},"end":{"row":37,"column":28},"action":"insert","lines":["{"]}]}],[{"group":"doc","deltas":[{"start":{"row":37,"column":28},"end":{"row":39,"column":5},"action":"insert","lines":["","        ","    }"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":7},"end":{"row":27,"column":11},"action":"remove","lines":["imic"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"remove","lines":["M"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"remove","lines":["s"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":6},"end":{"row":27,"column":7},"action":"insert","lines":["C"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":7},"end":{"row":27,"column":8},"action":"insert","lines":["a"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":8},"end":{"row":27,"column":9},"action":"insert","lines":["t"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":9},"end":{"row":27,"column":10},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":10},"end":{"row":27,"column":11},"action":"insert","lines":["g"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":11},"end":{"row":27,"column":12},"action":"insert","lines":["o"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":12},"end":{"row":27,"column":13},"action":"insert","lines":["r"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":13},"end":{"row":27,"column":14},"action":"insert","lines":["i"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":14},"end":{"row":27,"column":15},"action":"insert","lines":["e"]}]}],[{"group":"doc","deltas":[{"start":{"row":27,"column":15},"end":{"row":27,"column":16},"action":"insert","lines":["s"]}]}]]},"ace":{"folds":[],"scrolltop":195,"scrollleft":0,"selection":{"start":{"row":27,"column":16},"end":{"row":27,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":12,"state":"php-doc-start","mode":"ace/mode/php"}},"timestamp":1426045045610,"hash":"81668cd2723416d84657d69a6adedebcdd474991"}