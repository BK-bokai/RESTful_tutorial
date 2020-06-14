<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Services\SortService;
use App\Repositories\SortRepository;
use Mockery;

class SortTest extends TestCase
{

    protected function setUp() :void
    {
        parent::setUp();
        $stub = $this->createMock(SortRepository::class);
        $this->stub = $this->app->instance(SortRepository::class, $stub);
        $this->target = $this->app->make(SortService::class);
    }

    protected function tearDown() :void
    {
        parent::tearDown();
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $data=[1,3,2,4];

        //mock
        $this->stub->expects($this->once())->method('selectSortDESC')->willReturn([4,3,2,1]);

        $result = $this->target->selectSortDESC($data);
        $this->assertEquals([4,3,2,1], $result);
    }
}
