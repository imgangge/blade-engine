<?php
/**
 * @link       http://www.51talk.com
 * @copyright  copyright(2016) 51talk.com all rights reserved
 */
namespace Talk;

/**
 * Compiler
 *
 * @author      albert<ccuniverse@163.com>
 * @version     2017-01-26 16:16
 */
class Compiler extends \Illuminate\View\Compilers\BladeCompiler
{
    public function isExpired($path)
    {
        $compiled = $this->getCompiledPath($path);

        // If the compiled file doesn't exist we will indicate that the view is expired
        // so that it can be re-compiled. Else, we will verify the last modification
        // of the views is less than the modification times of the compiled views.
        if (! $this->files->exists($compiled)) {
            return true;
        }

        $lastModified = $this->files->lastModified($path);
        $compileModified = $this->files->lastModified($compiled);

        return $lastModified >= $compileModified || (time() - $compileModified) > 600;
    }
}