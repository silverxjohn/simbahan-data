@extends('layouts.master')

@section('breadcrumb')
    <li><a href="#"><i class="fa fa-dashboard"></i> Church</a></li>
    <li class="active">General</li>
@endsection

@section('content')
    <box title="Churches">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Parish</td>
                    <td>Address</td>
                    <td>Action</td>
                </tr>
                </thead>
                <tbody>
                <tr v-for="church in paginatedChurches">
                    <td>@{{ church.SimbahanID }}</td>
                    <td>@{{ church.Parish }}</td>
                    <td>@{{ church.CompleteAddress }}</td>
                    <td class="action">
                        <a href="#" @click.prevent="OnEditChurchClick(church.SimbahanID)"><i class="fa fa-edit"></i></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-6">
                <ul class="pagination pull-right">
                    <li :class="{'paginate_button previous disabled': isFirstPage, 'paginate_button previous': !isFirstPage}">
                        <a href="#" @click.prevent="DecrementPage">Previous</a>
                    </li>
                    <li v-for="index in itemsCount" @click.prevent="OnPaginatorButtonClicked(index)" :class="{'paginate_button active': isActivePage(index), 'paginate_button': !isActivePage(index)}"><a href="#">@{{ index }}</a></li>
                    <li class="{'paginate_button next disabled': isLastPage, 'paginate_button next': !isLastPage}">
                        <a href="#" @click.prevent="IncrementPage">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </box>
@endsection

@section('scripts')
<script src="{{ asset('js/church_index.js') }}"></script>
@endsection