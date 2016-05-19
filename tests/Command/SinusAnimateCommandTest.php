<?php

namespace tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Samovar\FFTConsole\Command\SinusAnimateCommand;

class SinusAnimateCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        $application = new Application();
        $application->add(new SinusAnimateCommand());

        $command = $application->find('samovar:animate:sinus');
        $commandTester = new CommandTester($command);

        $commandTester->execute([
            'command' => $command->getName(),
            'width' => 15,
            'height' => 15,
            '--iterations' => 1,
        ]);
        $excepted = "
                                          *******           
                                        **       **         
                                       *           *        
                                     **             **      
                                    *                 *     
                                                            
                                   *                   *    
                                  *                     *   
                                 *                       *  
                                *                         * 
                               *                           *
                                                            
*                             *                             
 *                           *                              
  *                         *                               
   *                       *                                
    *                     *                                 
                                                            
     *                   *                                  
      *                 *                                   
       **             **                                    
         *           *                                      
          **       **                                       
            *** ***                                         
";

        $this->assertSame($excepted, $commandTester->getDisplay());
    }
}
