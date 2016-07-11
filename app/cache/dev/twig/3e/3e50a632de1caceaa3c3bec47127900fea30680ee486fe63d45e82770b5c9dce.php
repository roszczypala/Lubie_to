<?php

/* AppBundle:User:index.html.twig */
class __TwigTemplate_60edc54aaff90f99541eb6df6c05d810458a20cb594dd785bf7289e64e3e7aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top' => array($this, 'block_top'),
            'middle' => array($this, 'block_middle'),
            'middle1' => array($this, 'block_middle1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0697f9a783f30ec914aa4954dc2f2710c626ae9589da5f60cebaed9b9cee873 = $this->env->getExtension("native_profiler");
        $__internal_c0697f9a783f30ec914aa4954dc2f2710c626ae9589da5f60cebaed9b9cee873->enter($__internal_c0697f9a783f30ec914aa4954dc2f2710c626ae9589da5f60cebaed9b9cee873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0697f9a783f30ec914aa4954dc2f2710c626ae9589da5f60cebaed9b9cee873->leave($__internal_c0697f9a783f30ec914aa4954dc2f2710c626ae9589da5f60cebaed9b9cee873_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_258bf5998fa689c472e3e284960bd5cdcc46d68f3f908782affee3ee2095c6e7 = $this->env->getExtension("native_profiler");
        $__internal_258bf5998fa689c472e3e284960bd5cdcc46d68f3f908782affee3ee2095c6e7->enter($__internal_258bf5998fa689c472e3e284960bd5cdcc46d68f3f908782affee3ee2095c6e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Admin panel";
        
        $__internal_258bf5998fa689c472e3e284960bd5cdcc46d68f3f908782affee3ee2095c6e7->leave($__internal_258bf5998fa689c472e3e284960bd5cdcc46d68f3f908782affee3ee2095c6e7_prof);

    }

    // line 5
    public function block_top($context, array $blocks = array())
    {
        $__internal_42b6ad2188584a85b06f7b3c9487fc5fb5fa50204ae573928004c7324236d757 = $this->env->getExtension("native_profiler");
        $__internal_42b6ad2188584a85b06f7b3c9487fc5fb5fa50204ae573928004c7324236d757->enter($__internal_42b6ad2188584a85b06f7b3c9487fc5fb5fa50204ae573928004c7324236d757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 6
        echo "    <div class=\"col-md-2\">
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/admin.png"), "html", null, true);
        echo "\" alt=\"Photo\" width=\"200\" height=\"200\" class=\"left-block\"/>
    </div>
    <div class=\"col-md-8\">
        <br><br><br><br><br><br>
        <div class=\"user-info\">
            <p>Admin panel</p>           
            <div class=\"btn-group\">     
                <a class=\"btn btn-custom\" href=\"/index\">User page</a>
                <a class=\"btn btn-custom\" href=\"/admin/index\">Main</a>
                <a class=\"btn btn-custom\" href=\"/admin/crews\">All active groups</a>
                <a class=\"btn btn-custom\" href=\"/admin/events\">All active events</a>
                <a class=\"btn btn-custom\" href=\"/admin/users\">All users</a>
            </div>
        </div>     
    </div>
    
";
        
        $__internal_42b6ad2188584a85b06f7b3c9487fc5fb5fa50204ae573928004c7324236d757->leave($__internal_42b6ad2188584a85b06f7b3c9487fc5fb5fa50204ae573928004c7324236d757_prof);

    }

    // line 26
    public function block_middle($context, array $blocks = array())
    {
        $__internal_cd6c390b12fcfee93ab80635fb5ff7283a5db64d49c60f55859e89cb289b8251 = $this->env->getExtension("native_profiler");
        $__internal_cd6c390b12fcfee93ab80635fb5ff7283a5db64d49c60f55859e89cb289b8251->enter($__internal_cd6c390b12fcfee93ab80635fb5ff7283a5db64d49c60f55859e89cb289b8251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle"));

        // line 27
        echo "    <h3>Events to accept</h3>
    <table class=\"table table-hover\">
    <th class='text-center'>Name</th>
    <th class='text-center'>Description</th>
    <th class='text-center'>Accepted</th>
    <th class='text-center'>Accept</th>
    <th class='text-center'>Remove</th>

        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 36
            echo "            <tr>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "accepted", array()), "html", null, true);
            echo "</td>
                <td><a href=\"/admin/event/getAccepted/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok accept\"></span></a></td>
                <td><a href=\"/admin/event/remove/";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove remove\"></span></a></td>
            </tr>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "            <p>No events to accept</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        </table>
";
        
        $__internal_cd6c390b12fcfee93ab80635fb5ff7283a5db64d49c60f55859e89cb289b8251->leave($__internal_cd6c390b12fcfee93ab80635fb5ff7283a5db64d49c60f55859e89cb289b8251_prof);

    }

    // line 50
    public function block_middle1($context, array $blocks = array())
    {
        $__internal_eae85511103d816b81cce70eb3898f1656d6ed2ea8aed265387372960001bab7 = $this->env->getExtension("native_profiler");
        $__internal_eae85511103d816b81cce70eb3898f1656d6ed2ea8aed265387372960001bab7->enter($__internal_eae85511103d816b81cce70eb3898f1656d6ed2ea8aed265387372960001bab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "middle1"));

        // line 51
        echo "        <h3>Groups to accept</h3>
        <table class=\"table table-hover\">
        <th class='text-center'>Name</th>
        <th class='text-center'>Description</th>
        <th class='text-center'>Accepted</th>


        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["crews"]) ? $context["crews"] : $this->getContext($context, "crews")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["crew"]) {
            // line 59
            echo "            <tr>
                <td><a class=\"link\" href=\"/crew/";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "accepted", array()), "html", null, true);
            echo "</td>
                <td><a href=\"/admin/crew/getAccepted/";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok accept\"></span></a></td>
                <td><a href=\"/admin/crew/remove/";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["crew"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove remove\"></span></a></td> 
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "            <p>No groups to accept</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crew'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_eae85511103d816b81cce70eb3898f1656d6ed2ea8aed265387372960001bab7->leave($__internal_eae85511103d816b81cce70eb3898f1656d6ed2ea8aed265387372960001bab7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 67,  188 => 64,  184 => 63,  180 => 62,  176 => 61,  170 => 60,  167 => 59,  162 => 58,  153 => 51,  147 => 50,  138 => 47,  131 => 45,  122 => 41,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  103 => 36,  98 => 35,  88 => 27,  82 => 26,  58 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Admin panel{% endblock %}*/
/* */
/* {% block top %}*/
/*     <div class="col-md-2">*/
/*         <img src="{{asset('img/admin.png')}}" alt="Photo" width="200" height="200" class="left-block"/>*/
/*     </div>*/
/*     <div class="col-md-8">*/
/*         <br><br><br><br><br><br>*/
/*         <div class="user-info">*/
/*             <p>Admin panel</p>           */
/*             <div class="btn-group">     */
/*                 <a class="btn btn-custom" href="/index">User page</a>*/
/*                 <a class="btn btn-custom" href="/admin/index">Main</a>*/
/*                 <a class="btn btn-custom" href="/admin/crews">All active groups</a>*/
/*                 <a class="btn btn-custom" href="/admin/events">All active events</a>*/
/*                 <a class="btn btn-custom" href="/admin/users">All users</a>*/
/*             </div>*/
/*         </div>     */
/*     </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
/* {% block middle %}*/
/*     <h3>Events to accept</h3>*/
/*     <table class="table table-hover">*/
/*     <th class='text-center'>Name</th>*/
/*     <th class='text-center'>Description</th>*/
/*     <th class='text-center'>Accepted</th>*/
/*     <th class='text-center'>Accept</th>*/
/*     <th class='text-center'>Remove</th>*/
/* */
/*         {% for event in events %}*/
/*             <tr>*/
/*                 <td>{{event.name}}</td>*/
/*                 <td>{{event.description}}</td>*/
/*                 <td>{{event.accepted}}</td>*/
/*                 <td><a href="/admin/event/getAccepted/{{event.id}}"><span class="glyphicon glyphicon-ok accept"></span></a></td>*/
/*                 <td><a href="/admin/event/remove/{{event.id}}"><span class="glyphicon glyphicon-remove remove"></span></a></td>*/
/*             </tr>*/
/* */
/*             {% else  %}*/
/*             <p>No events to accept</p>*/
/*         {% endfor %}*/
/* */
/*         </table>*/
/* {% endblock %}*/
/* {% block middle1 %}*/
/*         <h3>Groups to accept</h3>*/
/*         <table class="table table-hover">*/
/*         <th class='text-center'>Name</th>*/
/*         <th class='text-center'>Description</th>*/
/*         <th class='text-center'>Accepted</th>*/
/* */
/* */
/*         {% for crew in crews %}*/
/*             <tr>*/
/*                 <td><a class="link" href="/crew/{{crew.id}}">{{crew.name}}</a></td>*/
/*                 <td>{{crew.description}}</td>*/
/*                 <td>{{crew.accepted}}</td>*/
/*                 <td><a href="/admin/crew/getAccepted/{{crew.id}}"><span class="glyphicon glyphicon-ok accept"></span></a></td>*/
/*                 <td><a href="/admin/crew/remove/{{crew.id}}"><span class="glyphicon glyphicon-remove remove"></span></a></td> */
/*             </tr>*/
/*         {% else  %}*/
/*             <p>No groups to accept</p>*/
/*         {% endfor %}*/
/* {% endblock %}*/
/* */
