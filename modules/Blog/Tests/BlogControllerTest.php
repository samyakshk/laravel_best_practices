<?php 

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Support\Collection;
use Modules\Blog\Entities\Blog;
use Modules\Blog\Http\Controllers\BlogController;
use Modules\Blog\Repository\BlogRepository;

class BlogControllerTest extends TestCase
{
    protected $blogMock;

    public function setUp()
	{
	  parent::setUp();	 
	  $this->mock = $this->mock('Modules\Blog\Repository\BlogRepository');
	}
	  
	public function mock($class)
	{
	  $mock = Mockery::mock($class);	  
	  $this->app->instance($class, $mock);	  
	  return $mock;
	}
    
    public function testIndex()
    {
        //$this->mock->shouldReceive('all')->once();
        //$this->call('GET', '/api/v1/blogs');
        $repo=new BlogRepository();
        $blog=new BlogController($repo);
        $all=$blog->index();
        
        //$this->mock->shouldReceive('find')->once();
        //$this->call('GET', '/api/v1/blogs/1');
        
        //$this->assertResponseOk();
        
        $json_array  = json_decode($all, true);
        $elementCount  = count($json_array);
 
        $this->assertEquals($elementCount,12);
    }
}
