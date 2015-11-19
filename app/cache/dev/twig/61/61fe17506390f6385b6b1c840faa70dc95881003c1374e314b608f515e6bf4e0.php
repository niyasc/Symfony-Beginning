<?php

/* OpenSourceFeedBundle:Post:edit.html.twig */
class __TwigTemplate_2e60e976f278aa726de82b1029889fbda60b05148f57a9ffea7e92b5cac33b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "OpenSourceFeedBundle:Post:edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae0fc1e1257b4a017bb80e4ccc7ac67eb087ab867c3e68e1954f5948268465a9 = $this->env->getExtension("native_profiler");
        $__internal_ae0fc1e1257b4a017bb80e4ccc7ac67eb087ab867c3e68e1954f5948268465a9->enter($__internal_ae0fc1e1257b4a017bb80e4ccc7ac67eb087ab867c3e68e1954f5948268465a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OpenSourceFeedBundle:Post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae0fc1e1257b4a017bb80e4ccc7ac67eb087ab867c3e68e1954f5948268465a9->leave($__internal_ae0fc1e1257b4a017bb80e4ccc7ac67eb087ab867c3e68e1954f5948268465a9_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_2d84beb1acb2eda8cdeaf711858abd4da41b1a6c06e1bbf8620c3c9194ccb3a0 = $this->env->getExtension("native_profiler");
        $__internal_2d84beb1acb2eda8cdeaf711858abd4da41b1a6c06e1bbf8620c3c9194ccb3a0->enter($__internal_2d84beb1acb2eda8cdeaf711858abd4da41b1a6c06e1bbf8620c3c9194ccb3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<h2>EDIT POST</h2>

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start', array("attr" => array("class" => "post-form")));
        echo "
<div class=\"form-group\">
  ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "title", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "preText", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "summary", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "postText", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "link", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "category", array()), 'widget');
        echo "
</div>
<div class=\"form-group\">
  ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-primary btn-sm custom-btn"), "label" => "UPDATE"));
        echo "
  <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("post");
        echo "\" class=\"btn btn-primary btn-sm custom-btn\">CANCEL</a>
</div>
";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
";
        
        $__internal_2d84beb1acb2eda8cdeaf711858abd4da41b1a6c06e1bbf8620c3c9194ccb3a0->leave($__internal_2d84beb1acb2eda8cdeaf711858abd4da41b1a6c06e1bbf8620c3c9194ccb3a0_prof);

    }

    public function getTemplateName()
    {
        return "OpenSourceFeedBundle:Post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  89 => 27,  85 => 26,  79 => 23,  73 => 20,  67 => 17,  61 => 14,  55 => 11,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block main -%}*/
/* <h2>EDIT POST</h2>*/
/* */
/* {{form_start(edit_form, {'attr': {'class': 'post-form'}})}}*/
/* <div class="form-group">*/
/*   {{form_widget(edit_form.title)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(edit_form.preText)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(edit_form.summary)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(edit_form.postText)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(edit_form.link)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(edit_form.category)}}*/
/* </div>*/
/* <div class="form-group">*/
/*   {{form_widget(edit_form.submit, {'attr': {'class': 'btn btn-primary btn-sm custom-btn'}, 'label': 'UPDATE'})}}*/
/*   <a href="{{ path('post') }}" class="btn btn-primary btn-sm custom-btn">CANCEL</a>*/
/* </div>*/
/* {{form_end(edit_form)}}*/
/* {% endblock %}*/
/* */
