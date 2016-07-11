<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_00e188fd1c4f4a44b2c9636d36401f72fb93e8d959605340f13aa13076208130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53d5e3a03e476403fd532547ac791a3ccee128d4db4ceb6d6a3f1c5251977aec = $this->env->getExtension("native_profiler");
        $__internal_53d5e3a03e476403fd532547ac791a3ccee128d4db4ceb6d6a3f1c5251977aec->enter($__internal_53d5e3a03e476403fd532547ac791a3ccee128d4db4ceb6d6a3f1c5251977aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_53d5e3a03e476403fd532547ac791a3ccee128d4db4ceb6d6a3f1c5251977aec->leave($__internal_53d5e3a03e476403fd532547ac791a3ccee128d4db4ceb6d6a3f1c5251977aec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
