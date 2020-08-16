<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profile.twig */
class __TwigTemplate_77bd76931c962d2c2910e6de410aaf39bd70bc2b4d1e822e9420ea2d49ad13a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>

<body>
    <h1>esto es un docuemento viewww</h1>



    <div>";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
</body>

</html>";
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "profile.twig";
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile.twig", "C:\\xampp\\htdocs\\slim4-twig\\templates\\profile.twig");
    }
}
